<?php

include("bidding.class.php");

if(isset($_POST['taka'])){
    $bid = new Bidding();
    
    $id = $_POST['proId'];
    $email = $_POST['email'];
    $taka = $_POST['taka'];
    
    $submit = $bid->setBidding($id, $email, $taka);
    
    echo $submit;
    
}else{
    echo "DATA NOT FOUND!";
}

?>