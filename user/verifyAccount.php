<?php 
	require_once 'model/connection.php';
	@$email=$_GET['email'];
	@$otp=$_GET['unique'];
	$table="user";
	$email=mysql_real_escape_string($email);
	$otp=mysql_real_escape_string($otp);
	$obj=new connectionDb();
	$id=$obj->getId($table);
	$sql="select * from user_reg_temp where user_reg_temp_email='$email' && user_reg_temp_otp='$otp'";
	//echo $sql;
	$res=mysql_query($sql);
	$count=mysql_num_rows($res);
	if($count==1)
	{
		$data=mysql_fetch_assoc($res);
		
			$fetchEmail=$data['user_reg_temp_email'];
			$fetchOtp=$data['user_reg_temp_otp'];

			if($email==$fetchEmail && $otp=$fetchOtp)
			{
				$sql="insert into user(user_name,user_email,user_mobile,user_pass) select user_reg_temp_name , user_reg_temp_email,user_reg_temp_mobile,user_reg_temp_password from user_reg_temp where user_reg_temp_email='$email' && user_reg_temp_otp='$otp'";
				//echo $sql;
				$res=mysql_query($sql);
				if($res)
				{
					$delete="delete  from user_reg_temp where user_reg_temp_email='$email' && user_reg_temp_otp='$otp'";
					
					if(mysql_query($delete))
					{
						$msg= "Account is Activated";
					}
				}
			}
		
	}
	else
	{
		$msg="Account is Already Activated";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Association</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">
	<div class="container">
		<div class="card grey">
			<div class="card-content white-text">
			<span class="card-title">Email Verification</span>
			<div class="center">
				<?php
					if(!empty($msg))
					{
						?>
					 <img src="assets/image/clipboard.png">
					
					 <?php 
					 }
					 else
					 {
					 	?>
					 <img src="assets/image/loading.gif" >
					 <?php	
					}
					?>
			</div>
			<p class="center red">
				<?php
					if(!empty($msg))
					{
						echo $msg;
					}
				 ?>
			</p>
			<div class="card-action">
              <a href="?user=user">Login To Your Account</a>
              <a href="./">Home</a>
            </div>
		</div>
		</div>
	</div>
</body>
</html>