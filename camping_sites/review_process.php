<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>review</title>
	<meta name="viewport" content="width=device-width, initial-scal=1">
</head>
<body>

	<?php 

		include("connection.php");


		$name=trim($_POST['name']);
		$email=trim($_POST['email']);
        $rate=trim($_POST['rate']);
		$liked=trim($_POST['liked']);
		$disliked=trim($_POST['disliked']);
        $site=trim($_POST['site']);

		$name =mysqli_real_escape_string($connection,$name);
		$email =mysqli_real_escape_string($connection,$email);
        $rate =mysqli_real_escape_string($connection,$rate);
		$liked=mysqli_real_escape_string($connection,$liked);
        $disliked=mysqli_real_escape_string($connection,$disliked);
        $site=mysqli_real_escape_string($connection,$site);
				
				//$sql_existing_user = "select * from pitch_info where pname='$pname'";

				//$result = mysqli_query($connection,$sql_existing_user);

				//$num_rows = mysqli_num_rows($result);


				//if($num_rows==0){

				$sql="insert into review(name, email, rate, liked, disliked, site) 
					values('$name', '$email', '$rate', '$liked', '$disliked' ,'$site')";

				if(mysqli_query($connection,$sql)) 

					echo "<script>
					 		alert('Thanks for your feedback!');
							window.location = 'reviewform.php';
	 						</script>";

				else echo "Send Error!";

				//}

					//else{
						//echo "Existing pitch! Please try again.<br>";
					//}

	 ?>

</body>
</html>