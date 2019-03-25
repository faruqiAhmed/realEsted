<?php
$name=$_POST['name'];
$b=$_POST['stu'];
$c=$_POST['apartment'];
$d=$_POST['pri'];
$e=$_POST['area'];
$f=$_POST['room'];
$g=$_POST['Bathro'];
$i=$_POST['address'];
$j=$_POST['choose'];
$k=$_POST['choos'];
$l=$_POST['zip'];
$m=$_POST['messs'];
$n=$_POST['name'];
$o=$_POST['email'];
$p=$_POST['ph'];


if(isset($_POST['confirm']))
{
$a=$_POST['name'];
$b=$_POST['stu'];
$c=$_POST['apartment'];
$d=$_POST['pri'];
$e=$_POST['area'];
$f=$_POST['room'];
$g=$_POST['Bathro'];
$h=$_POST['image'];
$i=$_POST['address'];
$j=$_POST['choose'];
$k=$_POST['choos'];
$l=$_POST['zip'];
$m=$_POST['messs'];
$n=$_POST['name'];
$o=$_POST['email'];
$p=$_POST['ph'];

$con=mysqli_connect("localhost","root","","realea");
	 if (mysqli_connect_errno()) {
	     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	$sql="INSERT INTO `proparty`(`properrty_id`, `property_title`, `status`, `property_type`, `price`, `area`, `room`, `bathroom`, `photo_gallery`, `location_address`, `location_city`, `location_state`, `location_postal`, `details_information`, `contact_name`, `contact_email`, `contact_number`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p')";

	if (mysqli_query($con,$sql)) 
	{
		?>	
			<script type="text/javascript">
				alert("Hello User : U are successfully registered...");
			</script>
		<?php
		//echo "Hello User". $name. " U are successfully registered...";
	}
	else 
	{
	  echo "Error Registration database: ";
	}
}
