<?php
include("query.class.php");

    class GetUser extends UserQuery {
        public function getName($email){
            return $this->GetInfo($email, "name");
        }
        public function getPhone($email){
            return $this->GetInfo($email, "phone");
        }
        public function getType($email){
            return $this->GetInfo($email, "type");
        }
        public function getAddress($email){
            return $this->GetInfo($email, "address");
        }
        
        public function getPayNumber($email){
            return $this->GetInfo($email, "payNumber");
        }
        
        public function getPayName($email){
            return $this->GetInfo($email, "payName");
        }
    
        protected function getPassword($email){
            return $this->GetInfo($email, "password");
        }
    
        public function checkBooking($proId){
            $sql = "SELECT id FROM booking WHERE pro_id='$proId'";
            $result = $this->connect()->query($sql);
            if($result->num_rows > 0){
                return TRUE;
            }
        }
    
        public function checkBidding($proId, $email){
            $sql = "SELECT id FROM bidding WHERE pro_id='$proId' AND email='$email'";
            $result = $this->connect()->query($sql);
            if($result->num_rows > 0){
                return TRUE;
            }
        }

        public function topBidding($proId){
            $array = array();
            $sql = "SELECT taka FROM bidding WHERE pro_id='$proId' ORDER BY taka DESC LIMIT 5";
            $result = $this->connect()->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $array[] = $row;
                }
                return $array;
            }else{
                return false;
            }
        }
        
        
    }
?>