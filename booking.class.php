<?php
include('dbconfig.php');

class Booking extends Database{
    
    public function res(){
        if($this->bookingTable() == "booking"){
            return 1;
        }else{
            header("location: ".$_SERVER['PHP_SELF']);
        }
    }
    
    
    public function setBooking($proId, $email){
        if($this->res() == 1){
                $sql = "INSERT INTO booking (pro_id, email) VALUES ('$proId', '$email')";
                if($this->connect()->query($sql) === TRUE){
                    return $this->bookSuccess();
                }else{
                    return $this->bookError();
                }
            }

        }
    
}

?>