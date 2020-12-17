
<link rel="stylesheet" href="css/loginStyle.css">
		<center>
		<?php 				
			if(isset($_GET['m_id']) == 1 )
			{
				print '<h1 style = "\ color: red ; size: 25px; padding: 7px\">Invalid info!!!</h1>';
			}

		?>
	</center>
<div class="login-wrap" style="margin-top:40px">

	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
				<!-- login check through php & js -->

			<form method="post" name="user_login" action="loginCheck.php">				

				<div class="sign-in-htm">
					<div class="group">
						<label for="user"  class="label">Email Id</label>
						<input id="user" name="user_email" type="email" class="input" value="<?php 

							if(	isset($_COOKIE['cookieEmail'])	)
							{
								print $_COOKIE['cookieEmail'];
							}

						 ?>	" required>
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" name="user_password" type="password" class="input" data-type="password" required>
					</div>
					<div class="group">
						<input id="check"  name="remember" value="remember" type="checkbox" class="check">
						<label for="check"><span class="icon"></span> Remember me</label>
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign In" onclick="return email_validation(document.user_login.user_email)">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="#forgot">Forgot Password?</a>
					</div>
				</div>

			</form>
 	
			<!-- Sign up form -->

			<form method="post" name="user_signUp" action="signUp.php">

				<div class="sign-up-htm">
						<div class="group">
							<label for="user" class="label">Full Name</label>
							<input id="userN" name="user_name" type="text" class="input" required>
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="passwordN" name="user_password" type="password" class="input" data-type="password" required>
						</div>
						<div class="group">
							<label for="pass" class="label">Repeat Password</label>
							<input id="passwordNR" name="user_password_repeat" type="password" class="input" data-type="password" required>
						</div>
						<div class="group">
							<label for="pass" class="label">Email Address</label>
							<input id="new_email" name="user_email" type="text" class="input" required>
						</div>
						<div class="group">
							<input type="submit" name="sign_up"	class="button" value="Sign Up">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1">Already Member?</a>
						</div>
				</div>
			</form>


		</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/loginCheck.js"></script>