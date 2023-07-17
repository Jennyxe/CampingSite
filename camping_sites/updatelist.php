<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/7a01899c4b.js" crossorigin="anonymous"></script>
    <style>label{color: white;font-size: 20px;}</style>
    <title>updatelist</title>
</head>

<body class="contactbody">
    <?php

    include("connection.php");

    if (isset($_POST['submit'])) {


        $id = $_POST['id'];
        $pitch_name = $_POST['pitch_name'];
        $address = trim($_POST['address']);
        $general = trim($_POST['general']);
        $country = $_POST['country'];


        $sql = "update pitch_info set country='$country',pitch_name='$pitch_name',address='$address',general='$general' where id=$id";

        if (mysqli_query($connection, $sql))

        echo "<script>
                alert('Update Successful!');
                window.location = 'camping_list.php';
                </script>";
    } else {
        $id = $_GET['id'];

        $sql = "select * from pitch_info where id=$id";

        $result = mysqli_query($connection, $sql);

        //$num_rows=mysqli_num_rows($result);

        $record = mysqli_fetch_assoc($result);

        $pitch_name = $record['pitch_name'];
        $address = $record['address'];
        $general = $record['general'];
        $country = $record['country'];

    ?>

        <section class="header" id="home">
            <nav>
                <a href="adminmenu.php"><img src="./Images/logo2.png" class="logo" alt="logo" title="camping world"></a>
                <div class="nav-links">
                    <ul>

                        <li><a href="adminmenu.php">Home</a></li>
                        <li><a href="camping_list.php">Information</a></li>

                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </div>

            </nav>
            <section class="contact">
                <div class="contact-form">
                    <form action="updatelist.php" method="POST">

                        <?php

                        echo "<input type='hidden' name='id' value='$id'>";
                        ?>

                        <div>
                            <label for="pname">Pitch Name </label>
                            <?php
                            echo "<input type='text' name='pitch_name' value='$pitch_name'> <br><br>";
                            ?>
                        </div>
                        <div>
                            <label for="address">Address</label>
                            <?php
                            echo "<input type='text' name='address' value='$address'><br><br>";
                            ?>
                        </div>

                        <div>
                            <label for="general">General</label>
                            <?php
                            echo "<input type='text' name='general' value='$general'><br><br>";
                            ?>
                        </div>
                        <div>

                            <select name="country">
                                <option>choose country</option>
                                <?php

                                $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");


                                foreach ($countries as $c) {
                                    if ($country == $c)

                                        echo "<option selected>$c</option> ";
                                    else
                                        echo "<option>$c</option> ";
                                }

                                ?>
                        </div>
                        <br>
                        <input type="submit" name="submit" value="Update" class="submit-btn">
                        <input type="reset" value="clear" name="" class="submit-btn">
                        

                    </form>
                </div>
            </section>




        <?php
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
            <p>You are Update Page.<br>Copyright © 2023 Camping World All Rights Reserved.</p>
        </div>
    </section>
</body>

</html>