<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scal=1">
	<title>Review List</title>
	<link rel="stylesheet" href="./CSS/style.css?<?php echo time();?>">
   
</head>
<body class='R'>

<section class="header" id="home">
            <nav>
                <a href="#home"><img src="./Images/logo2.png" class="logo" alt="logo" title="camping world"></a>
                <div class="nav-links">
                    <ul>

						<li><a href="adminmenu.php">Home</a></li>
                        <li><a href="camping_list.php">Information</a></li>
						<li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </div>

            </nav>

	<?php 


		include("connection.php");

		//$id = $_GET['id'];
		$sql="select * from booking_list"; //all users

		//$sql="select * from user where lname='hla'";


		$result=mysqli_query($connection,$sql);

		$num_rows=mysqli_num_rows($result);
		echo "<div class='to'>";
		echo "<h2>Total no. of booking: <span>".$num_rows."</span></h2><hr>";
		echo "</div>";

		if($num_rows==0)echo "<br>";

		for($i = 0; $i < $num_rows; $i++)
		{
			$record=mysqli_fetch_assoc($result);

			echo "<div class='contactlist'>";
			echo "<h2><span>Booking list</span></h2>";
			echo "<p> name : ".$record['name']. "</p>";
			echo "<p>email : ".$record['email']. "</p>";			
			echo "<p>phone : ".$record['phone']. "</p>";
            echo "<p>pitch name : ".$record['pitch_name']. "</p>";
			echo "<p>checkin : ".$record['checkin']. "</p>";
			echo "<p>checkout : ".$record['checkout']. "</p>";
			echo "<p>adult : ".$record['adult']. "</p>";
			echo "<p>child : ".$record['child']. "</p>";
			echo "</div><br><hr>";
		}


	 ?>
</body>	
</html>