<?php
$host="localhost";
$user="root";
$pwd="";
$dbname="orr";
$conn=@mysqli_connect($host,$user,$pwd);
$db=@mysqli_select_db( $conn , $dbname) ;

?>