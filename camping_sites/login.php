	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scal=1">
		<link rel="stylesheet" href="./CSS/style.css?<?php echo time(); ?>">
		<script src="https://kit.fontawesome.com/7a01899c4b.js" crossorigin="anonymous"></script>
		<script src='https://www.google.com/recaptcha/api.js' async defer></script>
		
	</head>


	<body class="login">
		<?php

		if (isset($_COOKIE['Fail'])) {
			echo "<h2 class='block'>Login Blocked!</h2>";
		} else {


		?>
			<section class="header" id="home">
				<nav>
					<a href="home.php"><img src="./Images/logo2.png" class="logo" alt="logo" title="camping world"></a>
					<div class="nav-links">
						<ul>
							<li><a href="home.php">Home</a></li>

							<li><a href="user_register.php">Register</a></li>
							
						</ul>
						
					</div>
					
				</nav>
				
				<form action="loginprocess.php" method="POST">

					<div class="login-box">
						<h1>Login</h1>
						<div class="textbox">
							<i class="fas fa-user"></i>
							<input type="text" placeholder="Username" name="urname" id="urname" required>
						</div>
						<div class="textbox">
							<i class="fas fa-key"></i>
							<input type="password" placeholder="Password" name="pw" id="pw" required>
						</div>
						<div class="g-recaptcha" data-type="image" data-sitekey="6LePD7gmAAAAADhMsHFhJ7GAN6EDt9uTMDs574iq"></div>
						<input class="btn" type="submit" value="Log In" name="login" required>
						<hr>
						<div class="Acc">
							Don't have an account?
							<a href="user_register.php">Create one!</a>
						</div>
					</div>
					
				</form>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<section class="footer">
					<div class="foot">
						<div class="footer-content">

							<div class="footlinks">
								<h4>Quick Links</h4>
								<ul>
									<li><a href="user_register.php">Register</a></li>

									<li><a href="home.php">Home</a></li>
								</ul>
								

							</div>

							<div class="footlinks">
								<h4>Social</h4>
								<div class="social">
									<a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
									<a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-square-instagram"></i></i></a>
									<a href="https://www.twitter.com/" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
									<a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>

								</div>

							</div>
						</div>
					</div>

					<div class="end">
						<p>You are Login Page.<br>Copyright © 2023 Camping World All Rights Reserved.</p>

					</div>

				</section>

			<?php } ?>

		

	</body>

	</html>