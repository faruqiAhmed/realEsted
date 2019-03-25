<?php
 include "contact-2.php";
 ?>
 <?php
 
	$name=$_POST['name'];
	$email= $_POST['email'];
	$subject= $_POST['subject'];
	$phone= $_POST['phone'];
	$message=$_POST['message'];
	
	echo "\n  Name: ".$name."<br>";

	$con = mysqli_connect("localhost","root","","realea");
	// check connection
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL:" . mysqli_connect_errorno();
	}
$sql="INSERT INTO `contact`(`contact_id`, `name`, `email`, `subject`, `phone`, `message`) VALUES ('','$name','$email','$subject','$phone','$message')";
	
	if (mysqli_query($con,$sql)) {
	?>	
			<script type="text/javascript">
	 			alert("Hello User <?PHP echo $name ?>: U are successfully registered...");
	 		</script>
	<?php
		echo "Hello User". $name. " U are successfully registered...";
	} else {
	  echo "Error Registration database: ";
	}

?>