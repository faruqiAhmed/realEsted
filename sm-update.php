<?php
require_once('update.class.php');

$update = new Update();

if(isset($_POST['email'])){
    
    echo $update->updateUser($_POST['email'], $_POST['name'], $_POST['phone'], $_POST['type'], $_POST['address']);
}

if(isset($_POST['passemail'])){
    
    echo $update->passwordInfo($_POST['passemail'], $_POST['password'], $_POST['newpassword'], $_POST['repassword']);
}

if(isset($_POST['payEmail'])){
    echo $update->payment($_POST['payEmail'], $_POST['paymentNumber'], $_POST['payName']);
}



?>