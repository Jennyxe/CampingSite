<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css?<?php echo time(); ?>">
    <script src="https://use.fontawesome.com/a6f0361695.js"></script>
    <script src="https://kit.fontawesome.com/7a01899c4b.js" crossorigin="anonymous"></script>
    <title>Features</title>
</head>

<body>

    <body class="contactbody">
        <section class="header" id="home">
            <nav>
                <a href="home.php"><img src="./Images/logo2.png" class="logo" alt="logo" title="camping world"></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="adminmenu.php">Home</a></li>
                        <li><a href="camping_list.php">Information </a></li>

                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </div>

            </nav>
            <section class="contact">
                <div class="contact-form">
                    <h1>Features & Local Attraction Form</h1>

                    <h4>Features:</h4>
                    <form action="features_process.php" method="POST">

                        <input type="text" name="leisure" id="leisure" placeholder="Enter leisure on site" required>
                        <input type="text" name="amenities" id="amenities" placeholder="Enter amenities on site" required>
                        <input type="text" name="groups" id="groups" placeholder="Enter groups welcome" required>
                        <input type="text" name="rules" id="rules" placeholder="Enter rules" required>
                        <h4>Local Attractions:</h4><br>
                        <textarea name="LA" id="LA" cols="5" rows="5" placeholder="Enter local attractions"></textarea>
                        <input type="submit" value="Submit" class="submit-btn">
                        <input type="reset" value="clear" class="submit-btn">
            

                    </form>
                </div>

            </section>
            <br><br>
            <section class="footer">
            <div class="foot">
                <div class="footer-content">

                    <div class="footlinks">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="user_register.php">Register</a></li>

                            <li><a href="contactus.php">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="footlinks">
                        <h4>Social</h4>
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
                <p>You are Review Page.<br>Copyright © 2023 Camping World All Rights Reserved.</p>

            </div>

        </section>
    </body>

</html>