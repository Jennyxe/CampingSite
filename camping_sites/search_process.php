<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./CSS/style.css ?<?php echo time(); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/7a01899c4b.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<title>Search</title>
	
</head>

<body>
	<section class="header" id="home">
		<nav>
			<a href="adminmenu.php"><img src="./Images/logo2.png" class="logo" alt="logo" title="camping world"></a>
			<div class="nav-links">
				<ul>

					<li><a href="adminmenu.php">Home</a></li>
					<li><a href="camping_list.php">Information</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					<li><a href="logout.php">Log out</a></li>

				</ul>
			</div>
			<div id="google_translate_element"></div>
		</nav>
		<div class="s-container">
			<form action="search_process.php" method="POST">
				<input type="text" placeholder="search - your favorite destination ......." name="country">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
			<p>Available Country(USA, Italy, Scotland, England)</p>
		</div>
		<?php

		include("connection.php");

		$urname = $_SESSION['username'];
		
		$country = trim($_POST['country']);

		//$pitch_name = trim($_POST['pitch_name']);

		$sql = "select * from pitch_info where country LIKE '%$country%' or pitch_name LIKE '%$country%' or address LIKE '%$country%'";

		//$sql = "select * from user where lname='$lname'";
		//$sql = "select * from user where lname LIKE '%$lname' or fname LIKE '%$lname';
		$result = mysqli_query($connection, $sql);

		$num_rows = mysqli_num_rows($result);



		if ($num_rows == 0) echo "<p>Pitch not found! Try another one!</p>";


		else {

			for ($i = 0; $i < $num_rows; $i++) {
				$record = mysqli_fetch_assoc($result);

				echo "<div class='tt'>";
				echo "<span><h2><i>" . $record['pitch_name'] . "</i></h2></span>";
				echo "<h4>Address : " . $record['address'] . "</h4>";
				echo "<h4>General : " . $record['general'] . "</h4>";
				echo "<h4>Country : " . $record['country'] . "</h4>";
				//echo "<br>Location:".$record['location'];
				echo "<br>";
				echo "<br><img src='" . $record['photo'] . "' width='500' height='300'><br>";

				echo "<iframe src='" . $record['location'] . "' width='500' height='300'></iframe><br>";

				//echo "<br>Photo:".$record['photo'];
				

				if ($urname == "admin") {
						$id = $record['id'];
					echo "<br><br><button> <a href='#' onclick='deleteConfirm(" . $id . ")'>Delete</a></button>";
					echo "<button><a href='updatelist.php?id=" . $record['id'] . "'>Update</a></button>";
					echo "<button><a href='pitch_form.php'>Entry</a></button>";
					echo "<button><a href='review_list.php?id=".$record['id']."'>Review</a></button>";
					echo "<button><a href='features_list.php?id=".$record['id']."'>Feature&LA</a></button>";
					echo "<button><a href='book.php' target='_blank'>Book Now</a></button>";
				} 
				 else {
					echo "<br><button><a href='reviewform.php'>Feedback</a></button>";

					echo "<button><a href='review_list.php?id=".$record['id']."'>Review</a></button>";
					echo "<button><a href='features_list.php?id=".$record['id']."'>Feature&LA</a></button>";
					echo "<button><a href='book.php'>Book Now</a></button>";
				}
				echo "</div>";
				echo "<br><br><br>";
				echo "<hr>";
			}
		}

		?>

<section class="footer">
        <div class="foot">
            <div class="footer-content">

                <div class="footlinks">
                    <h4>QuickLinks</h4>
                    <ul>
                        <li><a href="user_register.php">Register</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footlinks">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-square-instagram"></i></i></a>
                        <a href="https://www.twitter.com/" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>

                    </div>
                </div>

            </div>
        </div>

        <div class="end">
            <p>You are Camping Site Page.<br>Copyright © 2023 Camping World All Rights Reserved.</p>
        </div>
    </section>



		<script type="text/javascript">
			
		function deleteConfirm(id)
		{
			if(confirm("Are you sure?"))
			{
				window.location ="deletecamp.php?id="+id;
			}
		}


		function googleTranslateElementInit() {
					new google.translate.TranslateElement({
						pageLanguage: 'en',
						layout: google.translate.TranslateElement.InlineLayout.SIMPLE
					}, 'google_translate_element');
				}
	</script>
</body>

</html>