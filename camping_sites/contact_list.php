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
		$sql="select * from contact"; //all users

		//$sql="select * from user where lname='hla'";


		$result=mysqli_query($connection,$sql);

		$num_rows=mysqli_num_rows($result);

		echo "<div class='to'>";
		echo "<h2>Total no. of Contact: <span>".$num_rows."</span></h2><hr>";
		echo "</div>";


		if($num_rows==0)echo "There is no contact yet!<br>";

		for($i = 0; $i < $num_rows; $i++)
		{
			$record=mysqli_fetch_assoc($result);

			echo "<div class='contactlist'>";
			echo "<h2><span>Contact Lists</span></h2>";
			echo "<p> First Name : ".$record['first_name']. "</p>";
			echo "<p>Last Name : ".$record['last_name']. "</p>";
			
			echo "<p>Email : ".$record['email']. "</p>";
            echo "<p>Messages : ".$record['message']. "</p>";
          
			echo "</div><br><hr>";
		}


	 ?>
</body>	
</html>