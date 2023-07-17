<?php

    include("connection.php");

    $id = $_POST['id'];
    $pitch_name=$_POST['pitch_name'];
    $country =$_POST['country'];
    

    $sql = "update pitch_info set country='$country',pitch_name='$pitch_name' where id=$id";

    if(mysqli_query($connection,$sql)) 
        
    echo "<script>
            alert('Update Successful!');
            window.location = 'updatelist.php';
         </script>";



?>