<?php 

class database{
    public $host = HOSTNAME;
    public $username = USER;
    public $database = DATABASE;
    public $password = PASSWORD;
    
    
    public $conn;
    
    public function __construct()
    {
        error_reporting(0);
        
        $this->conn = new mysqli($this->$host,$this->username,$this->password,$this->password);
        if($this->conn)
        {
            
            return $this->conn;
        }
        

    }

    public function insert($table , $params)
    {
        $insert = "INSERT INTO $table $columns VALUES $params";
        $fire = $this->conn($insert);
        if($fire)
        {
            echo "fired";
        }
        else 
        {
            echo "failed";
        }
    }
}


?>