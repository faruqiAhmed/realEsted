<?php
 include "index.php";
 ?>
 <?php
	$name=$_POST['name'];
	$Address= $_POST['Address'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	

	$con = mysqli_connect("localhost","root","","realea");
	// check connection
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL:" . mysqli_connect_errorno();
	}
$sql="INSERT INTO `booking`(`booking_id`, `Name`, `Address`, `email`, `phone`) VALUES ('','$name','$Address','$email','$phone')";
	
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