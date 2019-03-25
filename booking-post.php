<?php

include("booking.class.php");

if(isset($_POST['booking'])){
    $b = new Booking();
    
    $id = $_POST['booking'];
    $email = $_POST['email'];
    
    $do = $b->setBooking($id, $email);
    
    echo $do;
    
}else{
    echo "DATA NOT FOUND!";
}


?>