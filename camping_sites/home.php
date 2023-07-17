<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camping Website</title>
    <link rel="stylesheet" href="./CSS/style.css?<?php echo time();?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://kit.fontawesome.com/7a01899c4b.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="banner">
      <!--  <video src="./Images/campfire.mp4" type="video/mp4" autoplay muted loop></video>-->
        
        <section class="header" id="home">
            <nav>
                <a href="#home"><img src="./Images/logo2.png" class="logo" alt="logo" title="camping world"></a>
                <div class="nav-links">
                    <ul>
    
                        <li><a href="#home">Home</a></li>

                       
                        <li><a href="#about">About us </a></li>
                       
                        <li><a href="user_register.php">Register</a></li>
                    </ul>
                    
                </div>
                <div id="google_translate_element"></div>
            </nav>

            <div class="text-box">
                <h1>Make Your Great Escape<br>
                    Find the best campsites.</h1>
                <p>Book campsites, glamping sites and holiday parks</p>
                <a href="user_register.php" class="hero">Get Started</a>
            </div>

        </section>
       
    </div>

    
    <!-------------------Services----------------------------------->
    <?php include("viewcounter.php"); ?>
    <section>
        <h1 class="hh">Wearable Technology</h1>
        <p><br>TOOLS</p>

        <div class="rowitems">
            <div class="container-box">
                <div class="container-image">
                    <img src="./Images/bag1.png" alt="bag">
                </div>
                <h4>PowerPort Solar </h4>
                <p> Lite Bag</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./Images/watch.jpg" alt="light">
                </div>
                <h4>Smart CD</h4>
                <p>Watch</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./Images/listen.jpg" alt="radio">
                </div>
                <h4>Charge&Flashlight</h4>
                <p>Gear</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./Images/hatlight.jpg" alt="gear">
                </div>
                <h4>HatLight</h4>
                <p>Gear</p>
            </div>

        
        </div>
    </section>

    <!---------------------Locations------------------------------------------------------------------->

    <section class="location">
        <h1 class="hh">POPULAR LOCATIONS</h1>
        <p><br>Jounery To Explore World</p>


        <div class="location-content">

            <div class="col-content">
                <img src="./Images/uk1.jpg" alt="">
                <h5>Scotland</h5>
                <p></p>
            </div>



            <div class="col-content">
                <img src="./Images/us.jpg" alt="">
                <h5>England</h5>

            </div>

            <div class="col-content">
                <img src="./Images/uk.jpg" alt="">
                <h5>USA</h5>

            </div>

            <div class="col-content">
                <img src="./Images/us1.jpg" alt="">
                <h5>Italy</h5>
                <p></p>
            </div>
    </section>


    <!---------------------------------Photos gallery----------------------------->
    <div class="slideshow-container">
    <h1>Photo's from Travellers</h1>
        <div class="mySlides fade">
            <div class="numbertext">1 / 8</div>
            <img src="Images/c9.jpg">
            <div class="text">Wood Mountain Road Campground</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 8</div>
            <img src="Images/c8.jpg">
            <div class="text">Northern Nights Campground</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 8</div>
            <img src="Images/c4.jpg">
            <div class="text">Fossil Valley </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 8</div>
            <img src="Images/c1.jpg">
            <div class="text">Ettrick Valley Yurts</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 8</div>
            <img src="Images/c10.jpg">
            <div class="text">Collierhall Farm</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">6 / 8</div>
            <img src="Images/c6.jpg">
            <div class="text">Newbridge Country Park</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">7 / 8</div>
            <<img src="Images/c7.jpg">
                <div class="text">Castle Howard Lakeside</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">8 / 8</div>
            <<img src="Images/c11.jpg">
                <div class="text">Bracelands Campsite</div>
        </div>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
    


    <!--------------------------------------about  us---------------------------------------->

    <section class="about" id="about">
        <div class="contentBx">
            <h2 class="titleText">Meet the Camping World Crew</h2>
            <p class="text1">
                We started CampingWorld.com in 2022 to make it a doddle to book a campsite, caravan park or glamping site.
                <br /><br>
                We love what we do: we camp, we caravan, we travel. Our expert multinational team lead the way in inspiring ideas for holidays outdoors.
                <br /><br>
                it’s never been easier to find and book the perfect site - and rediscover the glee in camping and caravanning.
                <br><br>
                Connect with explorers and create content that reflects your free soul. Grow your brand with our global community. Join our Community!
            </p>
            <br>
            <a href="user_register.php" class="hero1">Get Started</a>
        </div>
        <div class="imgBx">
            <img src="./Images/about.webp" alt="img2" class="fitBg">
        </div>

    </section>
    <hr>
    <!--------------------------------------Map------------------------------------->

    <div class="google-map">
        <h1>Our location map</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5894.71094214454!2d-81.40629470772632!3d28.539235888800647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77bb4b4421213%3A0x28fd8f95e049f5de!2sCamping%20World%20Stadium!5e0!3m2!1smy!2smm!4v1685583823495!5m2!1smy!2smm" width="900" height="300" style="border: 3px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-----------copyright----------------------------------------------------------------->
    <section class="footer">
        <div class="foot">
            <div class="footer-content">

                <div class="footlinks">
                    <h4>Quick Links</h4>
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
                        <a href="rssfeed.php" target="_blank"><i class="fa-solid fa-square-rss"></i></a>

                    </div>
                </div>

            </div>
        </div>

        <div class="end">
            <p>You are Home Page.<br>Copyright © 2023 Camping World All Rights Reserved.</p>
        </div>
    </section>

    <script type="text/javascript">
				function googleTranslateElementInit() {
					new google.translate.TranslateElement({
						pageLanguage: 'en',
						layout: google.translate.TranslateElement.InlineLayout.SIMPLE
					}, 'google_translate_element');
				}
			</script>


</body>

</html>