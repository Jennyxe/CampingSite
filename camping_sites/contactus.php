<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/7a01899c4b.js" crossorigin="anonymous"></script>

    <title>Contact</title>
</head>

<body class="contactbody">
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
            
        </nav>
        <section class="contact">
            <div class="contact-form">
                <h1>Contact <span>Us</span></h1>
                <h3>Feel free to contact and reach us!!</h3>

                <form action="contact_process.php" method="POST">
                    <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Leave Your Message here" required></textarea>
                    <input type="submit" value="Submit" class="submit-btn">
                    <input type="reset" value="clear" class="submit-btn">
                </form>
            </div>

        </section>

        <br><br><br><br><br><br><br><br>
        <div class="phone">
            <p> <i class="fa-solid fa-paper-plane"></i>campingworld@gmail.com</p>
            <p> <i class="fa-solid fa-square-phone"></i>01-9756165549</p>
            <a href="policy.php" class="footer-bottom-link">Privacy Policy</a>
        </div>

        <section class="footer">
            <div class="foot">
                <div class="footer-content">

                    <div class="footlinks">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="adminmenu.php">Home</a></li>

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
                <p>You are Contact Page. <br>Copyright © 2023 Camping World All Rights Reserved.</p>

            </div>

        </section>

        </div>
    
</body>

</html>