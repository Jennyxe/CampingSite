<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css?<?php echo time(); ?>">
    <script src="https://use.fontawesome.com/a6f0361695.js"></script>
    <script src="https://kit.fontawesome.com/7a01899c4b.js" crossorigin="anonymous"></script>
    <title>Review Form</title>
</head>

<body class="contactbody">
    <section class="header" id="home">
        <nav>
            <a href="home.php"><img src="./Images/logo2.png" class="logo" alt="logo" title="camping world"></a>
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
                <h1>We Appreciate Your <span>Review</span></h1>
                <h3>Your review will help us to improve our quality and customer services.</h3>
                <h4 style="color :#fff;">Your personal info:</h4>

                <form action="review_process.php" method="POST">

                    <input type="text" name="name" id="name" placeholder="Your Name" required>
                    <input type="email" name="email" id="email" placeholder="Your E-mail" required>
                    <input type="text" name="site" id="site" placeholder="Enter Site Name" required>

                    <div style="color :#fff; padding: 10px;">Liked:</div>
                    <textarea name="liked" id="liked" cols="5" rows="5" placeholder="Leave Your Message here"></textarea>

                    <div style="color :#fff; padding: 10px;">Disliked:</div>
                    <textarea name="disliked" id="disliked" cols="5" rows="5" placeholder="Leave Your Message here"></textarea>

                    <div>
                        <div style="color :#fff; padding: 10px;">Rate overall services:</div>
                        <select name="rate">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>

                        </select>
                    </div>

                    <input type="submit" value="Submit" class="submit-btn">
                    <input type="reset" value="clear" class="submit-btn">
                </form>
            </div>

        </section>

        </form>
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
                <p>You are Review Page.<br>Copyright © 2023 Camping World All Rights Reserved.</p>

            </div>

        </section>


</body>

</html>