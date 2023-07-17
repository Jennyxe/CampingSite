<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewCounter</title>
</head>
<body>
    


<?php

        $host ="localhost";
		$username="root";
		$password="";
		$dbname="campingdb";

		$connection=mysqli_connect($host,$username,$password,$dbname);

function getUserIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}




// $ip = getUserIpAddr();
   $ip = "192.168.1.72";
// echo "<br>$ip<br>";



$qry = "SELECT * FROM visitedip WHERE ip = '$ip'";
$result = mysqli_query($connection, $qry);
$num = mysqli_num_rows($result);

if ($num == 0) {
    $qry3 = "INSERT INTO visitedip(ip) VALUES ('$ip')";
    mysqli_query($connection, $qry3);
    //echo "new ip register"; 



    $qry1 = "SELECT * FROM counter WHERE id = 0";
    $result1 = mysqli_query($connection, $qry1);



    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
    $count = $row1['count'];
    $count = $count + 1;

    $qry2 = "UPDATE counter SET count='$count' WHERE id=0";
    $result2 = mysqli_query($connection, $qry2);
} else {
    $qry1 = "SELECT * FROM counter WHERE id = 0";
    $result1 = mysqli_query($connection, $qry1);
    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
    $count = $row1['count'];
}



$numlength = strlen((string)$count);
?>

<?php
$count;
$stri = (string)$count;


echo "<div class='view'>";
echo "<h2>View Counter : " .$stri . "</h2>";
echo "</div>";
?>

</body>
</html>