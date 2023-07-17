<?php

    $host ="localhost";
	$username="root";
	$password="";
	$dbname="campingdb";

	$connection=mysqli_connect($host,$username,$password,$dbname);  

    $sql="create table pitch_info(id integer primary key auto_increment, pitch_name varchar(100) not null, address text not null, general text not null, location varchar(100) not null, country varchar(100) not null, photo varchar(200) not null, remark text null)";

	if(mysqli_query($connection,$sql)) 
		echo "table is created";

	else 
		echo "table creation Error!";



?>