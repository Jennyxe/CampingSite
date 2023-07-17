<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Registration</title>
	<style>

	</style>
</head>
<body>

	<?php 

		include("connection.php");


		$pname=trim($_POST['pname']);
		$address=trim($_POST['address']);
		$general=trim($_POST['general']);
		$location=trim($_POST['location']);
		$country=trim($_POST['country']);

		$photo_name=$_FILES['photo']['name'];

		$path = "photo/".$photo_name;

		copy($_FILES['photo']['tmp_name'],$path);


		$pname =mysqli_real_escape_string($connection,$pname);
		$address =mysqli_real_escape_string($connection,$address);
		$general =mysqli_real_escape_string($connection,$general);
		$location =mysqli_real_escape_string($connection,$location);
				
				//$sql_existing_user = "select * from pitch_info where pname='$pname'";

				//$result = mysqli_query($connection,$sql_existing_user);

				//$num_rows = mysqli_num_rows($result);


				//if($num_rows==0){

				$sql="insert into pitch_info(pitch_name, address, general, location, country, photo) 
					values('$pname', '$address', '$general','$location','$country','$path')";

				if(mysqli_query($connection,$sql)) 
					echo "	<script>
								alert('Registration Success!');
								window.location = 'pitch_form.php';
	 							</script>";

				else echo "Registration Error!";

				//}

					//else{
						//echo "Existing pitch! Please try again.<br>";
					//}

				

		



	 ?>

</body>
</html>