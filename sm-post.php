<?php

include("get.class.php");
include("session.user.php");

$hst = new User();

$get  = new GetUser();

Session::start();


if(isset($_POST['signup'])){
    $pr = $hst->addUser($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['repassword'], $_POST['type']);
    echo $pr;
}else if(isset($_POST['login'])){
    if(($hst->userLogin($_POST['email'], $_POST['password'])) == 1){
        Session::set('email', $_POST['email']);
        Session::set('login', TRUE);
        echo Session::get('login');
    }else{
        echo $hst->userLogin($_POST['email'], $_POST['password']);
    }
}else if(isset($_POST['forgot'])){
    echo $hst->forgotUser($_POST['email']);
}else if(isset($_POST['resend'])){
    echo $_POST['resend'];
}else if(isset($_POST['resetpass'])){
    echo $hst->passwordChange($_POST['email'], $_POST['password'], $_POST['repassword']);
}else if(isset($_POST['resetcode'])){
    $email = $_POST['email'];
    $code = $_POST['code'];
    $vcode = $hst->codeVerify($email, $code);
    if($vcode == 1){
        $up = $hst->activeCode($email);
        if($up == "UPDATED"){
            echo "SUCCESS";
        }else{
            echo $up;
        }
    }else{
        echo "Invalid Code";
    }
    /*echo $email.' '.$code;*/
    
}else if(isset($_GET['code'])){
    $email = $_GET['email'];
    $code = $_GET['code'];
    $vcode = $hst->codeVerify($email, $code);
    if($vcode == 1){
        $up = $hst->activeCode($email);
        if($up == "UPDATED"){
            echo "Your account is actived! please Login.";
        }else{
            echo $up;
        }
    }else{
        echo "Invalid Code";
    }
}else{
    echo "DATA NOT FOUND!";
}

?>