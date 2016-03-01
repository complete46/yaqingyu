#define _POSIX_SOURCE

#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <string.h>
#include <strings.h>
#include <signal.h>
#include <sys/types.h>
#include <sys/wait.h>

#define PATH_LEN 256
#define STRING_LEN 256

char* start = "<!DOCTYPE html>\n<html><head lang=\"en\">\n\t<meta charset=\"UTF-8\">\n\t<title>a simple index.html</title>\n</head>\n<body>\n<h1>a sample index.html</h1>\nPlease click on a thumbnail to view a meidum-size image</br>\n";
char* end = "</body>\n</html>";
char* html_path = "./index.html";

void generatePath(char* path, char* outPath, int para) {
	if (para == 10) {
		//Generate thumbnail path
		bzero(outPath, PATH_LEN);
		strcat(outPath, ".");
		char* dest = strrchr(path, '/');
		strcat(outPath, dest);
		dest = strrchr(outPath, '.');
		strcpy(dest, "_thumbnail.jpg");
		
	} else if (para == 25) {
		//Generate midsize path
		bzero(outPath, PATH_LEN);
		strcat(outPath, ".");
		char* dest = strrchr(path, '/');
		strcat(outPath, dest);
		dest = strrchr(outPath, '.');
		strcpy(dest, "_midsize.jpg");

	} else if (para == 0) {
		//Generate rotated pic path
		bzero(outPath, PATH_LEN);
		strcat(outPath, ".");
		char* dest = strrchr(path, '/');
		strcat(outPath, dest);
		dest = strrchr(outPath, '.');
		strcpy(dest, "_rotated.jpg");

	} else {
		fprintf(stderr, "No valid parameters");
	}
}
void generateHtml() {
	FILE* fp = fopen(html_path, "w");
	if (fp != NULL) {
		fprintf(fp, "%s\n", start);
		fclose(fp);
	}
}

void addToHtml(char* content) {
	FILE* fp = fopen(html_path, "a");
	if (fp != NULL) {
		fprintf(fp, "%s", content);
		fclose(fp);
	}
}

void addPicToHtml(char* picPath, char* linkPath) {
	char* buffer = (char*)malloc(STRING_LEN * 4);
	memset(buffer, 0, STRING_LEN * 4);

	strcat(buffer, "<a href=\"");
	strcat(buffer, linkPath);
	strcat(buffer, "\">\n\t<img src=\"");
	strcat(buffer,	picPath);
	strcat(buffer, "\" border=\"1\">\n</a></br>\n");

	addToHtml(buffer);
	free(buffer);

	return;
}

void addCaptionToHTML(char* cap) {
	char* buffer = (char*)malloc(STRING_LEN * 4);
	memset(buffer, 0, STRING_LEN * 4);

	strcat(buffer, "<h2>");
	strcat(buffer, cap);
	strcat(buffer, "</h2>");

	addToHtml(buffer);
	free(buffer);

	return;
}

int generateThumbNail(char* path, char* outPath) {
	int pid = fork();

	if (pid == 0) {
		execlp("/usr/bin/convert", "convert", "-geometry", "10%%", path, outPath, NULL);
		_exit(EXIT_FAILURE);
	} else {
		return pid;
	}
} 

int generateMidSize(char* path, char* outPath) {
	int pid = fork();
	
	if (pid == 0) {
		execlp("/usr/bin/convert", "convert", "-geometry", "25%%", path, outPath, NULL);
		_exit(EXIT_FAILURE);
	} else {
		return pid;
	}
}

void rotate(char* path, char* outPath) {
	int pid = fork();

	if (pid == 0) {
		execlp("/usr/bin/convert", "convert", "-rotate", "90", path, outPath, NULL);
		_exit(EXIT_FAILURE);
	}
}

int display(char* path) {
	int pid = fork();

	if (pid == 0) {
		printf("About to display pictures thumbnail");
		execlp("/usr/bin/display", "display", path, NULL);
		_exit(EXIT_FAILURE);
	} else {
		return pid;
	}
}

int getinput(char* buffer) {
	//Read user input to buffer
	bzero(buffer, STRING_LEN);
	fgets(buffer, STRING_LEN, stdin);

	int fetched = strlen(buffer);
	if (fetched && '\n' == buffer[fetched - 1]) {
		buffer[fetched - 1] = '\0';
	}

	return 0;
}


int main(int argc, char* argv[]) {
	int i = 1;

	char* buffer = (char*)malloc(STRING_LEN);
	generateHtml();

	for (; i < argc; i++) {

		char outPath10[PATH_LEN];
		char outPath25[PATH_LEN];
		char picPath[PATH_LEN];
		char linkPath[PATH_LEN];
		char buffer[STRING_LEN];

		generatePath(argv[i], outPath10, 10);
		generatePath(argv[i], outPath25, 25);


		int childPid1 = generateThumbNail(argv[i], outPath10);
		int childPid2 = generateMidSize(argv[i], outPath25);
		int stat1, stat2;

		waitpid(childPid1, &stat1, NULL);

		int displayId = display(outPath10);

		waitpid(childPid2, &stat2, NULL);
        
        printf("Do you want to rotate this picture?(y/n)\n");
        getinput(buffer);

        if (buffer[0] == 'y') {
        	char rotatePath10[PATH_LEN];
        	char rotatePath25[PATH_LEN];
        	generatePath(outPath10, rotatePath10, 0);
        	generatePath(outPath25, rotatePath25, 0);
        	rotate(outPath10, rotatePath10);
        	rotate(outPath25, rotatePath25);

        	memcpy(picPath, rotatePath10, PATH_LEN);
        	memcpy(linkPath, rotatePath25, PATH_LEN);

        } else {

        	memcpy(picPath, outPath10, PATH_LEN);
        	memcpy(linkPath, outPath25, PATH_LEN);

        	printf("Well, no rotating!\n");
        }

        printf("Do you want to add some caption?(y/n)\n");
        fflush(stdout);
		getinput(buffer);

        if (buffer[0] == 'y') {
        	char cap[256];
        	printf ("Input some caption (Please limited to 256 characters).\n");
        	getinput(cap);
        	addCaptionToHTML(cap);
        } else {
        	printf("Well, no caption!\n");
        }

        addPicToHtml(picPath, linkPath);
        kill(displayId, SIGTERM);
	}
	addToHtml(end);
	free(buffer);
}
