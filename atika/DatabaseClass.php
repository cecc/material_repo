<?php
class Database{
 
    // specify your own database credentials
    private $host = "sql2.njit.edu";
    private $db_name = "cecc";
    private $username = "cecc";
    private $password = "slavonic7";
    public $conn;

 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>
