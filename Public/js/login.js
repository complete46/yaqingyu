
$(function(){
	$('#login_submit').click(function(){	
		$.ajax({
			type : 'POST',		
			url : 'http://www.listyourwishes.com/index.php/Home/Login/login',
			data : {
				username : $('form input[name=login_name]').val(),			
				passwd:	$('form input[name=login_ps]').val()
			},
			
			success : function(response, status, xhr) {
				if(response!=0) {	    	                   
		            alert(response);		            
		        }
				else{
					location.href="http://www.listyourwishes.com/index.php/Home";			
				}
				
			},
			error : function (xhr, errorText, errorStatus) {
				alert(xhr.status + ':' + xhr.readyState);
			}
		});		
	});
	
	
});	
	
	
























