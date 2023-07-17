<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookprocess</title>
</head>
<body>
<?php 

include("connection.php");

//if(mysqli_query($connection,$sql)) 

if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
}



  if(!$captcha){
    echo "<script>alert('Please check the the captcha form');
          window.location = 'book.php';
          </script>";
    exit;
  }



  $secretKey = "6LePD7gmAAAAAGB8Rz1PDlnCElPpG9S5gZHABiJb";



  $ip = $_SERVER['REMOTE_ADDR'];



  // post request to server
  $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);



  $response = file_get_contents($url);
  $responseKeys = json_decode($response,true);



  // should return JSON with success as true
  if($responseKeys["success"]) {



    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $phone=trim($_POST['phone']);
    $pitch_name=trim($_POST['pitch_name']);
    $checkin=trim($_POST['checkin']);
    $checkout=trim($_POST['checkout']);
    $adult=trim($_POST['adult']);
    $child=trim($_POST['child']);
    
    
    $name =mysqli_real_escape_string($connection,$name);
    $email =mysqli_real_escape_string($connection,$email);
    $phone =mysqli_real_escape_string($connection,$phone);
    $pitch_name =mysqli_real_escape_string($connection,$pitch_name);
    $checkin =mysqli_real_escape_string($connection,$checkin);
    $checkout =mysqli_real_escape_string($connection,$checkout);
    $adult =mysqli_real_escape_string($connection,$adult);
    $child =mysqli_real_escape_string($connection,$child);
            
           // $sql_existing_user = "select * from pitch_info where pname='$pname'";
    
            //$result = mysqli_query($connection,$sql_existing_user);
    
            //$num_rows = mysqli_num_rows($result);
    
    
            //if($num_rows==0){
            
    
            $sql="insert into booking_list(name, email, phone, pitch_name, checkin, checkout, adult, child) 
                values('$name', '$email', '$phone', '$pitch_name', '$checkin', '$checkout', '$adult', '$child')";
    
            if(mysqli_query($connection,$sql)) 
    
            echo "<script>
                    alert('Book Successful!');
                    window.location = 'book.php';
                     </script>";
    
            else echo "Send Error!";  




  } 
  
  
  else {
      echo "<script>alert('reCaptcha verification failed');
      window.location = 'login.php';
      </script>";
  }




        ?>
</body>
</html>