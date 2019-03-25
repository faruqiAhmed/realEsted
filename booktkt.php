<?php 
session_start();
	if(empty($_SESSION['user_info'])){
		//echo "<script type='text/javascript'>alert('Please login before proceeding further!');</script>";
	}
$conn = mysqli_connect("localhost","root","","realea");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$proparty_type=$_POST['proparty_type'];
$sql = "SELECT property_id FROM bookign WHERE proparty_type= '$proparty_type'  ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$email=$_SESSION['user_info'];
$query="UPDATE login SET property_id='$row[property_id]' WHERE email='$email';";
	if(mysqli_query($conn, $query))
{  
	$message = " booked successfully";
}
	else {
		$message="Transaction failed";
	}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
