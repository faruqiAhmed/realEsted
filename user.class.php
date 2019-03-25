<?php

include("dbconfig.php");
include("send_mail.php");

class User extends Database {
    
    public function res(){
        if($this->loginTable() == "login"){
            return 1;
        }else{
            header("location: ".$_SERVER['PHP_SELF']);
        }
    }
    
    protected function email($email){
        $sql = "SELECT id FROM login WHERE email='$email'";
        $result = $this->connect()->query($sql);
        return $result->num_rows;
    }
    
    protected function phone($phone){
        $sql = "SELECT id FROM login WHERE phone='$phone'";
        $result = $this->connect()->query($sql);
        return $result->num_rows;
    }
    
    protected function updatePassword($email, $password){
        $sql = "UPDATE login SET password='$password' WHERE email='$email'";
        if($this->connect()->query($sql) === TRUE){
            return true;
        }else{
            return false;
        }
    }
    
    public function passwordChange($email, $password, $repassword){
        if((strlen($password) < 6) || (strlen($repassword) < 6))
                return $this->passwordSmall();
            
        if($password != $repassword)
            return $this->passwordMatch();
        
        $pass = md5($password);
        
        $ver = $this->updatePassword($email, $pass);
        if($ver == TRUE){
            return "UPDATED";
        }else{
            return "UNKNOWN ERROR";
        }
        
        
    }
    
    public function status($email){
        $sql = "SELECT status FROM login WHERE email='$email'";
        $result = $this->connect()->query($sql);
        if($result->num_rows == 1){
            while($row = $result->fetch_assoc()){
                return $row['status'];
            }
        }else{
            return 'ERROR!';
        }
    }
    
    public function codeVerify($email, $code){
        $sql = "SELECT code FROM login WHERE email='$email'";
        $result = $this->connect()->query($sql);
        if($result->num_rows == 1){
            while($row = $result->fetch_assoc()){
                $userCode = $row['code'];
            }
            
            if($userCode == $code){
                return 1;
            }else{
                return 0;
            }
            
        }else{
            return "Invalid Code!";
        }
    }
    
    
    public function activeCode($email){
        $code = $this->verifyCode();
        $sql = "UPDATE login SET status='ACTIVE', code='$code' WHERE email = '$email'";
        if($this->connect()->query($sql) === TRUE){
            return 'UPDATED';
        }else{
            return 'SOMETHING IS WRONG!';
        }
    }
    
    protected function validate_mobile($mobile){
        return preg_match('/^[+]{1}[0-9]{13}+$/', $mobile);
    }
    
    protected function verifyCode(){
        return mt_rand(100000, 999999);
    }
    
    public function forgotUser($email){
        if($this->validDate() == FALSE)
            return $this->licenseError();
        
        if($this->email($email) == 0)
            return $this->UserNotFound();
        
        $code = $this->verifyCode();
        
        $sql = "UPDATE login SET code='$code' WHERE email = '$email'";
        if($this->connect()->query($sql) === TRUE){
            $send = sendMail($email, 'FORGOT', $code);
            if( $send == "SEND"){ 
                return $this->forgotMail();
            }else{
                return $send;
            }
        }else{
            return "DB ERROR!";
        }
        
        
    }
    
    public function userLogin($email, $password){
        
        if($this->res() == 1){
        
            if($this->validDate() == FALSE)
                return $this->licenseError();

            if($this->email($email) == 0){
                return $this->UserNotFound();
            }

            $password = md5($password);

            $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
            $result = $this->connect()->query($sql);
            if($result->num_rows > 0){
                if($this->status($email) != "ACTIVE"){
                    return $this->inActive();
                }else{
                    return $this->actived();
                }

            }else{
                return $this->WrongPassword();
            }
        }
    }
    
    public function addUser($name, $email, $phone, $password, $repassword, $type){
        
        if($this->validDate() == FALSE)
            return $this->licenseError();
        
        if($this->res() == 1){
        
            if(strlen($password) < 6){
                return "Password is too small";
            }else if($password != $repassword){
                return "Password Not Matched";
            }else if($this->email($email) != 0){
                return "Sorry Email id already taken! Please Login";
            }else if($this->phone($phone) != 0){
                return "Phone Number Already Registerd!";
            }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              return "Invalid email format"; 
            }else if($this->validate_mobile($phone) != 1){
                return "Invalid Phone Number";
            }

            $password = md5($password);
            $time = time();
            $date = date('Y-m-d', $time);
            
            $code = $this->verifyCode();

            $sql = "INSERT INTO login (name, email, phone, password, type, reg_date, status, code) VALUES ('$name', '$email', '$phone', '$password', '$type', '$date', 'PENDING', '$code')";

            if($this->connect()->query($sql) === TRUE){
                $send = sendMail($email, 'SIGNUP', $code);
                if( $send == "SEND"){ 
                    return "INSERTED";
                }else{
                    return $send;
                }
            }else{
                return "ERROR! ".$this->connect()->error;
            }
        }
        
        
    }
    
    
    
}
/*

$hst = new User();
$pr = $hst->addUser("Sujan Molla", "smitexpert@gmail.com", "+8801994387497", "123321", "123321", "seller");

print_r($pr);
*/



?>