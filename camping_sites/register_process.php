<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Registration</title>
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
  
  
		$fname=trim($_POST['fname']);
		$lname=trim($_POST['lname']);
		$email=trim($_POST['email']);
		$urname=trim($_POST['urname']);
		$pw=trim($_POST['pw']);
		$confirmpw=trim($_POST['confirmpw']);
		$country=trim($_POST['country']);


		if($pw==$confirmpw)
			{

				$sql_existing_user = "select * from user where username='$urname'";

				$result = mysqli_query($connection,$sql_existing_user);

				$num_rows = mysqli_num_rows($result);

				if($num_rows==0){

						$sql="insert into user(fname, lname, email, username, password, country) 
					values('$fname','$lname','$email','$urname','$confirmpw','$country')";

						if(mysqli_query($connection,$sql)){
				
							echo "<script>
									alert('Registration complete!');
									window.location = 'login.php';
								 </script>";

						}

							else 
					
							echo "<script>alert('Registration Error!');</script>";

						}

						else{
							echo "<script>alert('Existing username! Please try new username!');
									window.location = 'user_register.php';</script>";			
							}

					    }

						else
						{
							echo "<script>
									alert('Password not match! Please try again!');
									window.location = 'user_register.php';
								</script>";
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