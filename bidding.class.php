<?php
include('dbconfig.php');

class Bidding extends Database{
    
    public function res(){
        if($this->biddingTable() == "bidding"){
            return 1;
        }else{
            header("location: ".$_SERVER['PHP_SELF']);
        }
    }
   
        
    
    
    public function setBidding($proId, $email, $taka){
        if($this->res() == 1) {
                $sql = "INSERT INTO bidding (pro_id, email, taka) VALUES ('$proId', '$email', '$taka')";
                if($this->connect()->query($sql) === TRUE){
                    return $this->biddingSuccess();
                }else{
                    return $this->biddingError();
                }
            }

        }
    
}

?>