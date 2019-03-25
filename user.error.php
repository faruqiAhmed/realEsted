<?php

include("sm-license.php");

class UserError extends License {
    
    public function UserNotFound(){
        return "User Not Found!";
    }
    
    public function WrongPassword(){
        return "Invalid Password!";
    }
    
    public function inActive(){
        return "User account not actived!";
    }
    
    public function actived(){
        return TRUE;
    }
    
    public function licenseError(){
        return "License Dateover! Please Contact 01994387497";
    }
    
    public function forgotMail(){
        return "Password reset code Was Send in Your Mail!";
    }
    
    public function passwordMatch(){
        return "Password Not Matched!";
    }
    
    public function passwordUpdated(){
        return "Password was update successfully!";
    }
    
    public function changePassword(){
        return "Password too small!";
    }
    
    public function usedPhone(){
        return "Sorry Phone Number in use!";
    }
    
    public function userUpdated(){
        return "User Info was Updated!";
    }
    
    public function bookSuccess(){
        return "Booking Successd!";
    }
    
    public function bookError(){
        return "Booking not completed!";
    }
    
    public function biddingSuccess(){
        return "Bid Successd!";
    }
    
    public function biddingError(){
        return "Bid not completed!";
    }
    
    public function paymentUpdated(){
        return "Payment successfully!";
    }  
    
}
?>