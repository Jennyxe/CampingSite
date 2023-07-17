<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scal=1">
  <title>Register</title>
  <link rel="stylesheet" href="./CSS/style.css?<?php echo time(); ?>">
  <script src="https://kit.fontawesome.com/7a01899c4b.js" crossorigin="anonymous"></script>
  <script src='https://www.google.com/recaptcha/api.js' async defer></script>
 
</head>

<body class="user">

  <section class="header" id="home">
    <nav>
      <a href="home.php"><img src="./Images/logo2.png" class="logo" alt="logo" title="camping world"></a>
      <div class="nav-links">
        <ul>
          <li><a href="home.php">Home</a></li>

          <li><a href="login.php">Log in</a></li>

        </ul>
      </div>
     
    </nav>



    <form action="register_process.php" method="POST">

      <div class="login-box">
        <h1 id="sutext">Sign <span>Up</span></h1>

        <div class="textbox">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="First Name" name="fname" id="fame" required>
        </div>
        <div class="textbox">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Last Name" name="lname" id="lname" required>
        </div>
        <div class="textbox">
          <i class="fas fa-envelope"></i>
          <input type="email" placeholder="Email" name="email" id="email" required>
        </div>
        <div class="textbox">
          <i class="fas fa-at"></i>
          <input type="text" placeholder="Username" name="urname" id="urname" required>
        </div>
        <div class="textbox">
          <i class="fas fa-key"></i>
          <input type="password" placeholder="Password" name="pw" id="pw" required>
        </div>
        <div class="textbox">
          <i class="fas fa-key"></i>
          <input type="password" placeholder="Confirm Password" name="confirmpw" id="confirmpw" required>
        </div>

        <div>
          <br>

          <select name="country">
            <option>-----choose your country----</option>
            <?php

            $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");


            foreach ($countries as $c) {
              echo "<option>$c</option>";
            }

            ?>

          </select>
        </div>
        <br>
        <div class="g-recaptcha" data-type="image"  data-sitekey="6LePD7gmAAAAADhMsHFhJ7GAN6EDt9uTMDs574iq"></div>

        <input class="btn" type="submit" value="Sign Up" name="signup">
        <div>
          <input class="btn" type="reset" value="clear" name="">
        </div>
        <hr>

        <div class="Acc">
          Already have an account?
          <a href="login.php">Login!</a>
        </div>
      </div>
    </form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <section class="footer">
      <div class="foot">
        <div class="footer-content">

          <div class="footlinks">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="user_register.php">Register</a></li>

              <li><a href="home.php">Home</a></li>
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
        <p>You are Sign Up Page.<br>Copyright © 2023 Camping World All Rights Reserved.</p>

      </div>

    </section>

  
</body>

</html>