<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
  
</head>

<body>

    <?php
    session_start();

    include("connection.php");

    $urname = $_SESSION['username'];

    if ($urname == 'admin') {
        $id = $_GET['id'];

        $sql = "delete from pitch_info where id=$id";

        if (mysqli_query($connection, $sql)) echo "<p>Delete Success!</p>";
    } else {
        echo "Restricted page! Administrator only!";
    }
    ?>
</body>

</html>