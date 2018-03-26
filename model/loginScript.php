<?php
	require_once 'connection.php';
	class loginScript{
		function __construct(){
			$obj= new connectionDb(); 
		}
		function checkUserMobileExist($mobile){
			$sql="select * from user where user_mobile ='$mobile'";
			$res=mysql_query($sql);
			$count=mysql_num_rows($res);
			if($count==1)
			{
				return true;
			}
			else{
				return false;
			}
		}
		function checkUserEmailExist($email)
		{
			$sql="select * from user where user_email ='$email'";
			$res=mysql_query($sql);
			$count=mysql_num_rows($res);
			if($count==1)
			{
				return true;
			}
			else{
				return false;
			}
		}
		function loginUsingEmail($email,$password){
				echo($email.$password);
		}
		function loginUsingMobile($mobile,$password)
		{
			echo $mobile.$password;
		}
		function validEntry($text)
		{
			$text=mysql_real_escape_string($text);
			$text=mysql_escape_string($text);
			return $text;
		}
	} 
	if(isset($_POST))
	{
		$err="";
		$login=new loginScript();
		$loginId=$_POST['loginId'];
		$loginId=$login->validEntry($loginId);
		$password=md5($_POST['password']);
		//echo $loginId . $password;
		//check whether email or password
		if (filter_var($loginId, FILTER_VALIDATE_EMAIL)) {
			  /*
				login with email
			  */ 
				if($login->checkUserEmailExist($loginId)==true)
				{
					$login->loginUsingEmail($loginId,$password);
				}else
				{
					$err=-1; //  email is not Registered
				}
			}
			else
			{
				/*
					login with mobile
				*/
				if($login->checkUserMobileExist($loginId)==true)
				{
					$login->loginUsingMobile($loginId,$password);
				}else{
					$err=-2; // mobile is not registered
				}	
			}
		if(!empty($err))
		{
			echo $err;
		}	
	}
?>