<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scal=1">
	<title>Feature List</title>
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
		$id = $_GET['id'];
		$sql="select * from features where id=$id"; //all users

		//$sql="select * from user where lname='hla'";


		$result=mysqli_query($connection,$sql);

		$num_rows=mysqli_num_rows($result);

		echo "<p>Total no. of features: <span>".$num_rows."</span></p><hr>";
	
		if($num_rows==0)echo "There is no features yet!<br>";

		for($i = 0; $i < $num_rows; $i++)
		{
			$record=mysqli_fetch_assoc($result);

			echo "<div class='f'>";
			echo "<h2><span>Features</span></h2>";
			echo "<p>Leisure on site : ".$record['leisure']. "</p>";
			echo "<p>Amenities on site : ".$record['amenities']. "</p>";
			
			echo "<p>Groups welcome : ".$record['groups']. "</p>";
            echo "<p>Rules : ".$record['rules']. "</p>";
            echo "<h3><span>Local Attractions</span></h3>";
            echo "<p> ".$record['LA']. "</p>";
			echo "</div><br><hr>";
		}






	 ?>
</body>	
</html>