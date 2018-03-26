<?php
	require_once 'connection.php';
	require_once 'sendMail.php'; 
	date_default_timezone_set('Asia/Kolkata');
	$date = date('y-m-d');
	$time = date("y-m-d h:i:sa");
	class registerScript{
		private $ip,$date,$time,$table,$id,$otp;

		function __construct()
		{
			$obj= new connectionDb();
			
			$this->ip=$_SERVER['REMOTE_ADDR'];
			$this->date=date('y-m-d');
			$this->time=date("y-m-d h:i:sa");
			$this->table="user_reg_temp";
			$this->id=$obj->getId($this->table);
			//$send->hello();
			//echo $this->ip.$this->date.$this->time;
		}
		function checkEmailExist($email)
		{
			$emailCheck="select * from user where user_email='$email'";
			$res=mysql_query($emailCheck);
			$count=mysql_num_rows($res);
			if($count==0){
				return false;
			}
			else{
				return true;
			}
		}
		function checkMobileExist($mobile)
		{
			$mobileCheck="Select * from user where user_mobile='$mobile'";
			$res=mysql_query($mobileCheck);
			$count=mysql_num_rows($res);
			if($count==0){
				return false;
			}
			else{
				return true;
			}
		}
		function checkEmailExistTemp($email)
		{
			$emailCheck="select * from user_reg_temp where user_reg_temp_email='$email'";
			$res=mysql_query($emailCheck);
			$count=mysql_num_rows($res);
			if($count==0){
				return false;
			}
			else{
				return true;
			}
		}
		function checkMobileExistTemp($mobile)
		{
		$mobileCheck="select * from user_reg_temp where user_reg_temp_mobile='$mobile'";
		$res=mysql_query($mobileCheck);
		$count=mysql_num_rows($res);
		if($count==0){
				return false;
			}
			else{
				return true;
			}
		}
		function generateOtp()
		{
			$this->otp=md5(mt_rand(10000,99999));
		}
		function userRegister($name,$email,$mobile,$password)
		{	$subject="Link for Email verification";
			$message="Your Verification link is";
			$website="http://localhost/da?user=verifyAccount&email=".$email."&unique=";
			$this->generateOtp();
			$send=new sendMail();
			$sqlRegister="Insert into user_reg_temp values ('$this->id','$name','$email','$mobile','$password','$this->ip','$this->date','$this->time','$this->otp')";
			/*$emailSend=$send->send($email,$subject,$message,"no-reply@dynamicassociation.com");
			var_dump($emailSend);*/
			/*if($emailSend==true)
			{
				if(mysql_query($sqlRegister))
				{
					echo 0; // insert statement
				}	
			}
			*/
			$website.=$this->otp;
			if(mysql_query($sqlRegister))
				{
					echo 0; // insert statement
					/*echo "<script>M.toast({
						html:'".$website."'
					})</script>";*/
				}
		}
		function validEntry($text)
		{
			$text=mysql_real_escape_string($text);
			$text=mysql_escape_string($text);
			return $text;
		}
	}
	if(isset($_POST))
	{	$err="";
		$reg=new registerScript();
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$password=$_POST['password'];
		$password=md5($password);
		$name=$reg->validEntry($name);
		$status=$reg->checkEmailExistTemp($email);

		if($reg->checkEmailExistTemp($email)==true)
		{
			$err=-1; // email is stored in user temp table
		}
		else if($reg->checkMobileExistTemp($mobile)==true)
		{
			$err=-2; // mobile is stored in user temp table
		}
		else if($reg->checkEmailExist($email)==true)
		{
			$err=1; // email is already registerd
		}
		else if($reg->checkMobileExist($mobile)==true)
		{
			$err=2; // Mobile is already register
		}
		if(empty($err))
		{
			$reg->userRegister($name,$email,$mobile,$password);
		}
		if(!empty($err))
		{
			echo $err;
					}
	}
?>