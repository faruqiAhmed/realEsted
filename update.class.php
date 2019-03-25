<?php
require_once('get.class.php');

class Update extends GetUser{
    
    public function updateUser($email, $name, $phone, $type, $address){
        //$number = "";
        if($this->phone($phone) == TRUE){
            if($this->getPhone($email) != $phone)
                return $this->usedPhone();
        }
        
        
        return $this->UpdateInfo($email, $name, $phone, $type, $address);
        
    }
    
    public function passwordInfo($email, $password, $newpassword, $repassword){
        if($this->getPassword($email) != md5($password))
            return $this->WrongPassword();
        
        if($newpassword != $repassword)
            return $this->passwordMatch();
        
        return $this->passwordUpdate($email, $newpassword, $repassword);
    }
    
    public function payment($email, $payNumber, $payName){
        return $this->payUpdate($email, $payNumber, $payName);
    }
    
}

?>