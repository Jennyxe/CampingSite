<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Features</title>
	<meta name="viewport" content="width=device-width, initial-scal=1">
</head>
<body>

	<?php 

		include("connection.php");


		$leisure=trim($_POST['leisure']);
		$amenities=trim($_POST['amenities']);
        $groups=trim($_POST['groups']);
		$rules=trim($_POST['rules']);
		$LA=trim($_POST['LA']);
      

		$leisure =mysqli_real_escape_string($connection,$leisure);
		$amenities =mysqli_real_escape_string($connection,$amenities);
        $groups =mysqli_real_escape_string($connection,$groups);
		$rules=mysqli_real_escape_string($connection,$rules);
        $LA=mysqli_real_escape_string($connection,$LA);
       
				
				//$sql_existing_user = "select * from pitch_info where pname='$pname'";

				//$result = mysqli_query($connection,$sql_existing_user);

				//$num_rows = mysqli_num_rows($result);


				//if($num_rows==0){

				$sql="insert into features(leisure, amenities, groups, rules, LA) 
					values('$leisure', '$amenities', '$groups, '$rules', '$LA')";

                    if(mysqli_query($connection,$sql)) 

					echo "<script>
					 		alert('Registration complete!');
							window.location = 'features.php';
	 						</script>";

				else echo "Send Error!";

				//}

					//else{
						//echo "Existing pitch! Please try again.<br>";
					//}

	 ?>

</body>
</html>