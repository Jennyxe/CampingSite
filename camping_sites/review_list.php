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

		$id = $_GET['id'];
		$sql="select * from review where id=$id"; //all users

		//$sql="select * from user where lname='hla'";


		$result=mysqli_query($connection,$sql);

		$num_rows=mysqli_num_rows($result);

		echo "<p>Total no. of review: <span>".$num_rows."</span></p><hr>";

		if($num_rows==0)echo "There is no review yet!<br>";

		for($i = 0; $i < $num_rows; $i++)
		{
			$record=mysqli_fetch_assoc($result);

			echo "<div class='review'>";
			echo "<h2>Site Name : <span>".$record['site']. "</span></h2>";
			echo "<p> Reviewer Name : ".$record['name']. "</p>";
			echo "<p>Email : ".$record['email']. "</p>";
			
			echo "<p>Liked : ".$record['liked']. "</p>";
            echo "<p>Disliked : ".$record['disliked']. "</p>";
            echo "<p>Overall Rate : ".$record['rate']. "</p>";
			echo "</div><br><hr>";
		}


	 ?>
</body>	
</html>