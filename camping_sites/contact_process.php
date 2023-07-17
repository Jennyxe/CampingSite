<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Form</title>
</head>
<body>

	<?php 

		include("connection.php");


		$first_name=trim($_POST['first_name']);
		$last_name=trim($_POST['last_name']);
		$email=trim($_POST['email']);
		$message=trim($_POST['message']);
		


		$first_name =mysqli_real_escape_string($connection,$first_name);
		$last_name =mysqli_real_escape_string($connection,$last_name);
		$email =mysqli_real_escape_string($connection,$email);
		$message =mysqli_real_escape_string($connection,$message);
				
				//$sql_existing_user = "select * from pitch_info where pname='$pname'";

				//$result = mysqli_query($connection,$sql_existing_user);

				//$num_rows = mysqli_num_rows($result);


				//if($num_rows==0){

				$sql="insert into contact(first_name, last_name, email, message) 
					values('$first_name', '$last_name', '$email', '$message')";

				if(mysqli_query($connection,$sql)) 
				echo "<script>
						alert('Send Successful!');
						window.location = 'contactus.php';
				 		</script>";

				else echo "Send Error!";

				//}

					//else{
						//echo "Existing pitch! Please try again.<br>";
					//}

				

		



	 ?>

</body>
</html>