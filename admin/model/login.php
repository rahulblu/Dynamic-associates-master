<?php
	require_once 'connection.php';
	class Login{
		function __construct(){
			$obj=new connectionDb();
		}
		function loginadmin($email,$password){
			$sql="select * from admin where email='".$email."'&& password='".$password."'";
			$res=mysql_query($sql);
			$count=mysql_num_rows($res);
			if($count==1)
			{
				echo "1";
				$_SESSION['loggedin'] = true;
    			$_SESSION['username'] = $email;
				
			}
			if($count!=1)
			{
				echo "-1";
			}
		}
	}
if(isset($_POST))
{
	
	$loginEmail=$_POST['inputEmail'];
	$loginPassword=$_POST['inputPassword'];
	$loginEmail=mysql_real_escape_string($loginEmail);
	$loginPassword=md5($loginPassword);
	$loginObj=new Login();
	$loginObj->loginadmin($loginEmail,$loginPassword);
}
?>