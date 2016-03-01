$(function(){
	$('#reply_submit').click(function(){	
		$.ajax({
			type: 'POST',		
			url: 'http://www.listyourwishes.com/index.php/Home/Item/reply',
			data: {
				wish_id: $('.invisible').val(),			
				reply: $('#reply_text').val()
			},			
			success: function(response, status, xhr) {
				if(response==0) {	    	                   
		            alert("发表成功");	
		            window.location.reload();
		        }
				else if(response==2){
					location.href="http://www.listyourwishes.com/index.php/Login";			
				}
				else{
					alert("连接失败");		
				}
			},
			error: function (xhr, errorText, errorStatus) {
				alert(xhr.status + ':' + xhr.readyState);
			}
		});		
	});
	
	
});	
	
	
























