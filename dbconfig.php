<?php


include("user.error.php");

class Database extends UserError{   
    
    private $host = "localhost";
    private $db_name = "realea";
    private $username = "root";
    private $password = "";
    public $conn;
     
    public function dbConnection(){
     
	    $this->conn = null;    
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
    
    protected function connect(){
        $conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        return $conn;
    }
    
    protected function loginTable(){
        $conn = $this->connect();
        $sql = "SELECT id FROM login";
        if(empty(mysqli_query($conn, $sql))){
            $table = "CREATE TABLE login(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(30) NOT NULL,
                email VARCHAR(30) NOT NULL UNIQUE,
                phone VARCHAR(30) NOT NULL UNIQUE,
                password TEXT NOT NULL,
                type VARCHAR(30) NOT NULL,
                address TEXT NOT NULL,
                payNumber VARCHAR(30) NOT NULL,
                payName VARCHAR(30) NOT NULL,
                image TEXT NOT NULL,
                reg_date TIMESTAMP,
                status VARCHAR(30) NOT NULL,
                code VARCHAR(30) NOT NULL
            )";
            
            if($conn->query($table) === TRUE){
                return "TABLE CREATED!";
            }else{
                return "TABLE EXXX ".$conn->error;
            }
        }
        
        return "login";
        
    }
    
    protected function bookingTable(){
        $conn = $this->connect();
        $sql = "SELECT id FROM booking";
        if(empty(mysqli_query($conn, $sql))){
            $table = "CREATE TABLE booking(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                pro_id INT(6) NOT NULL,
                email VARCHAR(30) NOT NULL,
                reg_date TIMESTAMP
            )";
            
            if($conn->query($table) === TRUE){
                return "TABLE CREATED!";
            }else{
                return "TABLE EXXX ".$conn->error;
            }
        }
        
        return "booking";
        
    }
    
    protected function biddingTable(){
        $conn = $this->connect();
        $sql = "SELECT id FROM bidding";
        if(empty(mysqli_query($conn, $sql))){
            $table = "CREATE TABLE bidding(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                pro_id INT(6) NOT NULL,
                email VARCHAR(30) NOT NULL,
                taka INT(6) NOT NULL,
                reg_date TIMESTAMP
            )";
            
            if($conn->query($table) === TRUE){
                return "TABLE CREATED!";
            }else{
                return "TABLE EXXX ".$conn->error;
            }
        }
        
        return "bidding";
        
    }
}
?>