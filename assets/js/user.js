$(document).ready(function(){
		function loginUser(loginId, password){
			$.ajax({
				type:'POST',
				url:'model/loginScript.php',
				data:'loginId='+loginId+'&password='+password,
				beforeSend:function(){
					//alert(data);
				},
				success:function(response)
				{
					if(response=='-1')
					{	$('#loginId').focus();
						M.toast({
							html:'<i class="fa fa-warning"></i>&nbsp; This Email is not registerd',
							classes:'red'
						});
					}
					if(response=='-2')
					{	$('#loginId').focus();
						M.toast({
							html:'<i class="fa fa-warning"></i>&nbsp; This Mobile Number is not registerd',
							classes:'red'
						});
					}
				}
			});
		}
	$('#user_login_form #loginId').focus();
	$('#user_register_form').submit(function(event){
		event.preventDefault();
		var name=$('#name').val();
		var email=$('#register_email').val();
		var mobile=$('#register_mobile').val();
		var password=$('#register_password').val();
		var data=$('#user_register_form').serialize();
		var letters = /^[a-zA-Z\s]+$/;
		var phone=	/^[6-9]\d{9}$/;
		var emailRegex=/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if(name=="" || name== null)
		{
			//$('#name').addClass('invalid-input');
			$('#name').focus();
			M.toast({
				html:'<i class="fa fa-warning"></i>&nbsp;Name Is Required',
				classes: 'red'
			});
			return false;
		}
		else if(!name.match(letters)){
			$('#name').focus();
			M.toast({
				html:'<i class="fa fa-warning"></i>&nbsp;Invalid Pattern',
				classes: 'red'
			});
			return false;
		}
		else if(email=="" || email== null)
		{
			$('#register_email').focus();
			M.toast({
				html:'<i class="fa fa-envelope"></i> &nbsp;Email Is Required'
			});
			return false;
		}
		else if(!email.match(emailRegex))
		{
			$('#register_email').focus();
			M.toast({
				html:'<i class="fa fa-envelope"></i>&nbsp; Email is not Valid'
			});
			return false;
		}
		else if(mobile=="" || mobile ==null)
		{
			$('#register_mobile').focus();
			M.toast({
				html:'<i class="fa fa-mobile"></i> &nbsp; Mobile Numnber is Required'
			});
			return false;
		}
		else if(!mobile.match(phone))
		{
			$('#register_mobile').focus();
			M.toast({
				html:'<i class="fa fa-mobile"></i> &nbsp; Only 10 digit Mobile Number'
			});
			return false;
		}
		else if(password=="" || password == null)
		{
			$('#password').focus();
			M.toast({
				html:'<i class="fa fa-warning"></i>&nbsp;Password is required',
				classes:'red '
			})
		}
		else{
			/*
				if no error than start registering user
			*/
			$.ajax({
					type:'POST',
					url:'model/registerScript.php',
					data:data,
					beforeSend:function(){
						$('#loader-wraaper').removeClass('hide');
					},
					success:function(response){
						$('#loader-wraaper').addClass('hide');
						if(response== "-1" )
						{
							M.toast({
								html:'<i class="fa fa-warning"></i>&nbsp; Account is not Active&nbsp;<i class="fa fa-envelope"></i>&nbsp;'+email+'&nbsp; is already registerd',
								classes:'red'
							});
						}
						else if(response=="-2")
						{
							M.toast({
								html:'<i class="fa fa-warning"></i>&nbsp; Account is not Active&nbsp;<i class="fa fa-mobile"></i>&nbsp;+91-'+mobile+'&nbsp; is already registerd',
								classes:'red'
							});
						}
						else if(response=="1")
						{
							M.toast({
								html:'<i class="fa fa-envelope"></i>&nbsp;'+email+'&nbsp; is already registerd',
								classes:'red'
							});
						}
						else if(response=="2")
						{
							M.toast({
								html:'<i class="fa fa-mobile"></i>&nbsp;+91-'+mobile+'&nbsp; is already registerd',
								classes:'red'
							});
						}
						else if(response=="0")
						{
							M.toast({
								html:' registerd',
								classes:'green'
							});
							$('#user_register_form .form-control').val('');
						}
					}
			});
		}
	});
	$('#user_login_form').submit(function(event){
		event.preventDefault();
		var data=$('#user_login_form').serialize();
		var loginId=$('#loginId').val();
		var password=$('#login_password').val();
		var phone=	/^[6-9]\d{9}$/;
		var emailRegex=/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		
		if(loginId=="" || loginId==null)
		{
			$('#loginId').focus();
			M.toast({
				html:'Please enter &nbsp;<i class="fa fa-envelope"></i>&nbsp; Email OR &nbsp;<i class="fa fa-mobile"></i>&nbsp; Mobile'
				,classes:'red'			
			});
			return false;
		}
		else if(password=="" || password== null)
		{
			$('#login_password').focus();
			M.toast({
				html:'<i class="fa fa-warning"></i> &nbsp;Please enter Password'
				,classes:'red'			
			});
			return false;
		}
		else if(loginId.match(phone))
		{
			loginUser(loginId, password);
		}
		else if(loginId.match(emailRegex))
		{
			loginUser(loginId,password);
		}
		else if(!loginId.match(phone) || !loginId.match(emailRegex))
		{
			$('#loginId').focus();
			M.toast({
				html:'<i class="fa fa-warning"></i> &nbsp;Please enter Valid Mobile OR Email'
				,classes:'red'			
			});
			return false;
		}

	});

});