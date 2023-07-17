 <?php session_start(); ?>


 <!DOCTYPE html>
 <html>

 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scal=1">
	 <link rel="stylesheet" href="./CSS/style.css?<?php echo time();?>">
 	<title>Login</title>

 </head>

 <body>
 	<?php

		include("connection.php");

		
		if(isset($_POST['g-recaptcha-response'])){
			$captcha=$_POST['g-recaptcha-response'];
		}
  
   
  
		  if(!$captcha){
			echo "<script>alert('Please check the the captcha form');
				  window.location = 'login.php';
				  </script>";
			exit;
		  }
  
   
  
		  $secretKey = "6LePD7gmAAAAAGB8Rz1PDlnCElPpG9S5gZHABiJb";
  
   
  
		  $ip = $_SERVER['REMOTE_ADDR'];
  
   
  
		  // post request to server
		  $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
  
   
  
		  $response = file_get_contents($url);
		  $responseKeys = json_decode($response,true);
  
   
  
		  // should return JSON with success as true
		  if($responseKeys["success"]) {
  
  
			if (isset($_SESSION['counter'])) {
				if ($_SESSION['counter'] >= 3) {
					setcookie("Fail", "1", time() + 60);
					include("timer.php");
					exit();
				}
			} else {
				$_SESSION['counter'] = 1;
			}
	
	
			$urname = $_POST['urname'];
			$pw = $_POST['pw'];
	
			$sql = "select * from user where username='$urname' and password='$pw'";
	
			$result = mysqli_query($connection, $sql);
	
			$num_rows = mysqli_num_rows($result);
	
			if ($num_rows == 0) {
	
				echo "<script>
						alert('Wrong Password Try again!');
						window.location = 'login.php';
						 </script>";
				$_SESSION['counter']++;
			} else {
				//echo "Valid User!";
				$_SESSION['username'] = $urname;
				echo "<script>
				alert('Login Successful!');
				window.location ='adminmenu.php';</script>";
			}
			 
  
   
  
		  } 
		  
		  
		  else {
			  echo "<script>alert('reCaptcha verification failed');
			  window.location = 'login.php';
			  </script>";
		  }
		  
   
		
		?>
 </body>

 </html>