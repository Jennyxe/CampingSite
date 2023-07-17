<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/7a01899c4b.js" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    <title>Booking Form</title>
</head>
    
    <body class="contactbody">
        <section class="header" id="home">
            <nav>
                <a href="adminmenu.php"><img src="./Images/logo2.png" class="logo" alt="logo" title="camping world"></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="adminmenu.php">Home</a></li>
                        <li><a href="camping_list.php">Information </a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </div>

            </nav>


            <section class="contact">
                <div class="contact-form">
                    <h1>Book <span>Now</span></h1>
                    <h4 style="color :#fff;">Personal info :</h4>

                    <form action="book_process.php" method="POST">

                        <input type="text" name="name" id="name" placeholder="Your Name" required>
                        <input type="email" name="email" id="email" placeholder="Your E-mail" required>
                        <input type="text" name="phone" id="phone" placeholder="Your Phone Number">

                        <div>
                            <label for="destination">Destination :</label>
                            
                            <input type="text" name="pitch_name" id="pitch_name"  placeholder="Wood Mountain Road Campground">
                            
                        </div><br>
                        <div>
                            <label for="checkin-date">Check-in Date :</label>
                            <input type="date" id="checkin" name="checkin" required>
                        </div>
                        <div>
                            <label for="checkout-date">Check-out Date :</label>
                            <input type="date" id="checkout" name="checkout" required>
                        </div>

                        <div>
                            <label for="adult">Adults :</label>
                            <input type="number" id="adult" name="adult" placeholder="Number of adult" min="1" required>
                        </div>
                        <div>
                            <label for="child">Children :</label>
                            <input type="number" id="child" name="child" placeholder="Number of child" min="0" required>
                        </div>
                        <br>
                        <div class="g-recaptcha" data-type="image" data-sitekey="6LePD7gmAAAAADhMsHFhJ7GAN6EDt9uTMDs574iq"></div><br>
                        <input type="submit" value="Submit" class="submit-btn">
                        <input type="reset" value="clear" class="submit-btn">

                    </form>

                </div>
            </section>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
            <section class="footer">
                <div class="foot">
                    <div class="footer-content">

                        <div class="footlinks">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="adminmenu.php">Home</a></li>

                                <li><a href="contactus.php" target="_blank">Contact Us</a></li>
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
                    <p>You are Booking Page.<br>Copyright © 2023 Camping World All Rights Reserved.</p>

                </div>

            </section>

    </body>

</html>