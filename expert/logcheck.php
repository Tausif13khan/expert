	<?php
if(isset($_REQUEST['submit']))
{
	include_once('connect.php');

//get values from the login.php files

$username= $_REQUEST['user'];
$password= $_REQUEST['pass'];

$sql="select * from login where name ='$username' && passwoed = '$password'";
$res=mysqli_query( $conn , $sql ) or die(mysqli_errno().'='.mysqli_error());
$row=mysqli_num_rows($res);
if($row==true){
	header("location:customer.php");
}
else
{
	header("location:index.php");
}
}
?>