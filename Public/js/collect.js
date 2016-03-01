//check1
$(function(){
		$.ajax({
		type : 'POST',		
		url : 'http://www.listyourwishes.com/index.php/Home/Collections/check',
		data : {
			wish_id : $('.invisible').val()
		},
		success : function(response, status, xhr) {
			if(response==0) {
				$("#collect").css('display','inline-block'); 
				$("#plain").css('display','none'); 
				$("#red").css('display','inline-block');
				$("#delete").css('display','none');
	        }
			else if(response==1){	
				$("#collect").css('display','inline-block'); 
				$("#plain").css('display','inline-block'); 
				$("#red").css('display','none');
				$("#delete").css('display','none');
			}
			else if(response==2){	
				$("#collect").css('display','none'); 
				$("#plain").css('display','none'); 
				$("#red").css('display','none');
				$("#delete").css('display','inline-block');
			}	        
			else if(response==3)	                   
				window.location.href="http://www.listyourwishes.com/index.php/Home/Login";
			else
				$("#plain").css('display','inline-block'); 			        
		},
		error : function (xhr, errorText, errorStatus) {
			alert(xhr.status + ':' + xhr.statusText);
		}
	});
	
	
	
	$('#collect').click(function(){	
		$.ajax({
			type : 'POST',		
			url : 'http://www.listyourwishes.com/index.php/Home/Collections/collect',
			data : {
				wish_id : $('.invisible').val()
			},
			success : function(response, status, xhr) {
				if(response==0) {
					 $("#plain").css('display','none'); 
					 $("#red").css('display','inline-block');
					 alert('已收藏');
		        }
				else if(response==1) {
					 $("#red").css('display','none'); 
					 $("#plain").css('display','inline-block');
					 alert('已取消收藏');
		        }
				else if(response==2)		                   
		            alert("连接失败，请稍后再试");
		        
				else	                   
					window.location.href="http://www.listyourwishes.com/index.php/Home/Login";
		        
			},
			error : function (xhr, errorText, errorStatus) {
				alert(xhr.status + ':' + xhr.statusText);
			}
		});
	});
	
	$('#delete').click(function(){	
		alert('此功能尚在开发阶段，请稍后再试');
	});
	
});	
