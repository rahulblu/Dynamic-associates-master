<?php
	include_once 'view/header.php'; 
?>

	<div class="container">
		<div class="row">
			<div class="col l6 s12 m12">
				<h4 class="center">LOGIN</h4>
				<form id="user_login_form" method="post" action="#">
					<div class="custom-field">
						<input type="text" class="form-control" name="loginId" id="loginId" placeholder="Mobile OR Email">
					</div>
					<div class="custom-field">
						<input type="password" id="login_password" class="form-control" name="password" placeholder="Enter Your Password">
					</div>
					<div class="custom-field">
						<span class="">
							<a href="" class="link">Forget Password</a>
						</span>
					</div>
						<div class="center">
							<button type="submit" class="btn grey darken-1">Login</button>
						</div>
					
				</form>
			</div>
			<div class="col l6 m12 s12">
				<h4 class="center">REGISTER</h4>
				<form id="user_register_form" method="post" action="#">
					<div class="custom-field">
						<input type="text" class="form-control" name="name" id="name" placeholder="Name">
					</div>
					<div class="custom-field">
						<input type="text" class="form-control" name="email" id="register_email" placeholder="Email">
					</div>
					<div class="custom-field">
						
						<input type="text" id="register_mobile" class="form-control" name="mobile" placeholder="Enter Your Mobile">
					</div>
					<div class="custom-field">
						
						<input type="password" id="register_password" class="form-control" name="password" placeholder="Enter Your Password">
					</div>
					<div class="right hide" id="loader-wraaper">
						<div class="preloader-wrapper small active">
						    <div class="spinner-layer spinner-red-only">
						      <div class="circle-clipper left">
						        <div class="circle"></div>
						      </div><div class="gap-patch">
						        <div class="circle"></div>
						      </div><div class="circle-clipper right">
						        <div class="circle"></div>
						      </div>
						    </div>
						  </div>
					</div>
					<div class="center">
						<button class="btn orange darken-2 ">Register</button>
					</div>

				</form>
			</div>
		</div>
	</div>
<?php 
	include_once 'view/footer.php';
?>