
$(function(){
	$('#r_name').blur(function(){		
		$.ajax({
			type : 'POST',		
			url : 'http://www.listyourwishes.com/index.php/Home/Register/checkname',
			data : {
				username : $(this).val()
			},
			success : function(response, status, xhr) {
				if(response==0) {
		            $('#checkbox').html("OK");
		            $('#checkbox').css('color', 'green');
		            
		          } else {		                   
		            $('#checkbox').html(response);
		            $('#checkbox').css('color', 'red');
		          }
			},
			error : function (xhr, errorText, errorStatus) {
				alert(xhr.status + ':' + xhr.statusText);
			}
		});
	});
	$('#email').blur(function(){		
		$.ajax({
			type : 'POST',		
			url : 'http://www.listyourwishes.com/index.php/Home/Register/checkemail',
			data : {
				email : $(this).val()
			},
			success : function(response, status, xhr) {
				if(response==0) {
		            $('#checkbox2').html("OK");
		            $('#checkbox2').css('color', 'green');
		            
		          } else {		                   
		            $('#checkbox2').html(response);
		            $('#checkbox2').css('color', 'red');
		          }
			},
			error : function (xhr, errorText, errorStatus) {
				alert(xhr.status + ':' + xhr.statusText);
			}
		});
	});
	
	$('#psw1').blur(function(){		
		$.ajax({
			type : 'POST',		
			url : 'http://www.listyourwishes.com/index.php/Home/Register/checkpsw1',
			data : {
				psw1 : $(this).val()
			},
			success : function(response, status, xhr) {
				if(response==0) {
		            $('#checkbox3').html("OK");
		            $('#checkbox3').css('color', 'green');
		            
		          } else {		                   
		            $('#checkbox3').html(response);
		            $('#checkbox3').css('color', 'red');
		          }
			},
			error : function (xhr, errorText, errorStatus) {
				alert(xhr.status + ':' + xhr.statusText);
			}
		});
	});
	$('#psw2').blur(function(){		
		$.ajax({
			type : 'POST',		
			url : 'http://www.listyourwishes.com/index.php/Home/Register/checkpsw2',
			data : {
				psw2 : $(this).val(),
				psw1: $('form input[name=psw1]').val()
			},
			success : function(response, status, xhr) {
				if(response==0) {
		            $('#checkbox4').html("OK");
		            $('#checkbox4').css('color', 'green');
		            
		          } else {		                   
		            $('#checkbox4').html(response);
		            $('#checkbox4').css('color', 'red');
		          }
			},
			error : function (xhr, errorText, errorStatus) {
				alert(xhr.status + ':' + xhr.statusText);
			}
		});
	});

	$('#register_submit').click(function(){	
		$.ajax({
			type : 'POST',		
			url : 'http://www.listyourwishes.com/index.php/Home/Register/beforesubmit',
			data : {
				username : $('form input[name=r_name]').val(),
				email : $('form input[name=email]').val(),
				psw1:	$('form input[name=psw1]').val(),
				psw2:	$('form input[name=psw2]').val()
			},
			
			success : function(response, status, xhr) {
				if(response!=0) {	    	                   
		            alert(response);
		        }
				else{
					$('#register_form').submit();
				}
			},
			error : function (xhr, errorText, errorStatus) {
				alert(xhr.status + ':' + xhr.statusText);
				alert(xhr.status + ':' + xhr.statusText);
			}
		});		
	});
	
	
});	
