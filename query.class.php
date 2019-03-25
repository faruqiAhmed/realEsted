<?php
include("user.class.php");

class UserQuery extends User {
    protected function GetInfo($email, $item){
        $sql = "SELECT $item as item FROM login WHERE email='$email'";
        $result = $this->connect()->query($sql);
        $num_rows = $result->num_rows;
        if($num_rows == 1){
            $row = $result->fetch_assoc();
            return $row['item'];
        }else{
            return false;
        }
    }
    
    protected function updateInfo($email, $name, $phone, $type, $address){
        $sql = "UPDATE login SET name='$name', phone='$phone', type='$type', address='$address' WHERE email='$email'";
        if($this->connect()->query($sql) === TRUE)
            return $this->userUpdated();
        else
            return $this->connect()->error;
    }
    
    protected function passwordUpdate($email, $password, $repassword){
        if((strlen($password) < 6) || (strlen($repassword) < 6))
                return $this->passwordSmall();
            
        if($password != $repassword)
            return $this->passwordMatch();
        
        $pass = md5($password);
        
        $ver = $this->updatePassword($email, $pass);
        if($ver == TRUE){
            return $this->passwordUpdated();
        }else{
            return "UNKNOWN ERROR";
        }
        
        
    }
    
    protected function payUpdate($email, $number, $name){
        $sql = "UPDATE login SET payName='$name',  payNumber=''$number WHERE email='$email'";
        if($this->connect()->query($sql) === TRUE){
            return $this->paymentUpdated();
        }else{
            return $this->connect()->error; 
        }
    }
    
}

?>