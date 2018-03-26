$(document).ready(function(){
	//toastr.warning('hello');
	toastr.options.progressBar = true;
	$('#loginform').submit(function(event){
		event.preventDefault();
		var data=$('#loginform').serialize();
		$.ajax({
			type:'POST',
			data:data,
			url:'./model/login.php',
			beforeSend:function(){
				//toastr.success('waiting');
				$('#loginBtn').hide();
				$('.logoSpinner').removeClass('hide');
			},
			success:function(response){
				if(response==1)
				{
					$('#loginBtn').show();
					$('.logoSpinner').addClass('hide');
					toastr.success('success',function(){
						 setTimeout('window.location.href = "?view=dashboard"; ',2000);
					});

				}
				else{
					$('#loginBtn').show();
					$('.logoSpinner').addClass('hide');
					toastr.error('Wrong Combination of Email and Password','Login Failed');
				}
			}
		});
	});
});