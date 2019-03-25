

<?php
	//include "connect.php";
  if (isset($_POST["save"]) && $_POST['save'] != null) {
	$b = $_POST['stu'];
	$c = $_POST['apartment'];
	$d = $_POST['pri'];
	$e = $_POST['area'];
	$f = $_POST['room'];
	$g = $_POST['Bathro'];
	$i = $_POST['address'];
	$j = $_POST['choose'];
	
	
	$m = $_POST['messs'];
	$n = $_POST['name'];
	$o = $_POST['email'];
	$p = $_POST['ph'];
     $youtube = $_POST["youtube"];
	 $google=$_POST["google"];
	 $fromDate=$_POST["fromDate"];
	 $kitchen = $_POST["Kitchen"];
			

	$permited  = array('jpg', 'jpeg', 'png', 'gif');
   	$file_name = $_FILES['photo_gallery']['name'];
   	// var_dump($file_name);
   	// exit();
	$file_size = $_FILES['photo_gallery']['size'];
	$file_temp = $_FILES['photo_gallery']['tmp_name'];

	$div = explode('.', $file_name);
	$file_ext = strtolower(end($div));
	$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
	$uploaded_image = "images/".$unique_image;
    move_uploaded_file($file_temp, $uploaded_image);
    if ($_POST['apartment'] == 'Apartment') {
		$con = mysqli_connect("localhost","root","","realea");
		// check connection
		if(mysqli_connect_errno()){
			echo "Failed to connect to MySQL:" . mysqli_connect_errorno();
		}

		$sql = "INSERT INTO reant(  status, property_type, price, area, room, bathroom, kitchen, photo_gallery, location_address, location_city,youtube_link,google_map,details_information, contact_name, contact_email, contact_number,publicationdate) VALUES ('$b','$c','$d','$e','$f','$g','$kitchen','$uploaded_image', '$i','$j','$youtube','$google','$m','$n','$o','$p','$fromDate')";

		if (mysqli_query($con,$sql)) {
		?>	
				<script type="text/javascript">
		 			alert("Hello User <?PHP echo $name ?>: U are successfully registered...");
		 		</script>
		<?php
			echo "Hello User U are successfully registered...";
		} else {
		  echo "Error Registration database: ";
		}
    } else {
		$con = mysqli_connect("localhost","root","","realea");
		// check connection
		if(mysqli_connect_errno()){
			echo "Failed to connect to MySQL:" . mysqli_connect_errorno();
		}
			$f = null;
			$g = null;
	 		$kitchen = null;
		$sql = "INSERT INTO reant(  status, property_type, price, area, room, bathroom, kitchen, photo_gallery, location_address, location_city,youtube_link,google_map,details_information, contact_name, contact_email, contact_number,publicationdate) VALUES ('$b','$c','$d','$e','$f','$g','$kitchen','$uploaded_image', '$i','$j','$youtube','$google','$m','$n','$o','$p','$fromDate')";

		if (mysqli_query($con,$sql)) {
		?>	
				<script type="text/javascript">
		 			alert("Hello User <?PHP echo $name ?>: U are successfully registered...");
		 		</script>
		<?php
			echo "Hello User U are successfully registered...";
		} else {
		  echo "Error Registration database: ";
		}
    }
}
   ?>

<?php
   include("index.php");

?>


   <?php
	// $b = $_POST['stu'];
	// $c = $_POST['apartment'];
	// $d = $_POST['pri'];
	// $e = $_POST['area'];
	// $f = $_POST['room'];
	// $g = $_POST['Bathro'];

	// $i = $_POST['address'];
	// $j = $_POST['choose'];
	// $k = $_POST['choos'];
	// $l = $_POST['zip'];
	// $m = $_POST['messs'];
	// $n = $_POST['name'];
	// $o = $_POST['email'];
	// $p = $_POST['ph'];
 //     $youtube = $_POST["youtube"];
	//  $google=$_POST["google"];
	//  $fromDate=$_POST["fromDate"];
	//  $kitchen=$_POST["kitchen"];
			

	// $permited  = array('jpg', 'jpeg', 'png', 'gif');
 //   	$file_name = $_FILES['photo_gallery']['name'];
 //   	// var_dump($file_name);
 //   	// exit();
	// $file_size = $_FILES['photo_gallery']['size'];
	// $file_temp = $_FILES['photo_gallery']['tmp_name'];

	// $div = explode('.', $file_name);
	// $file_ext = strtolower(end($div));
	// $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
	// $uploaded_image = "images/".$unique_image;
 //    move_uploaded_file($file_temp, $uploaded_image);

	// // echo "your".$name."<br>";
	// // echo "your".$b."<br>";
	// // echo "your Brith date is".$c."<br>";
	// // echo  "your Bloodgroup is".$d."<br>"; 
	// // echo "your  Addres is".$e."<br>";
	// // echo "your presnt addres is".$f."<br>";
	// // echo "your perment addres is".$g."<br>";
	// // echo "your Mobile No is".$i."<br>";
	// // echo "your Email is".$j."<br>";
	// // echo "you".$k."<br>";
	// // echo "you".$l."<br>";
	// // echo "you".$m."<br>";
	// // echo "you".$n."<br>";
	// // echo "you".$o."<br>";
	// // echo "you".$p."<br>";

	// $con = mysqli_connect("localhost","root","","realea");
	// // check connection
	// if(mysqli_connect_errno()){
	// 	echo "Failed to connect to MySQL:" . mysqli_connect_errorno();
	// }
	// $sql = "INSERT INTO proparty(  status, property_type, price, area, room, bathroom, kitchen, photo_gallery, location_address, location_city, location_state, location_postal,youtube_link,google_map,details_information, contact_name, contact_email, contact_number,date) VALUES ('$b','$c','$d','$e','$f','$g','$kitchen','$uploaded_image', '$i','$j','$k','$l','$youtube','$google','$m','$n','$o','$p','$fromDate')";

	// if (mysqli_query($con,$sql)) {
	?>	
	// 		<!-- <script type="text/javascript">
	//  			alert("Hello User <?PHP echo $name ?>: U are successfully registered...");
	//  		</script> -->
	 <?php
	// 	echo "Hello User". $name. " U are successfully registered...";
	// } else {
	//   echo "Error Registration database: ";
	// }
?>