<?php
class DB{

    public $servername="localhost";
    public $user="root";
    public $pass="admin";
    public $dbName="reg";

    protected $conn;
    
    public function connect(){
    
        $this->conn = new mysqli($this->servername,$this-> user,$this-> pass,$this->dbName);
        if ($this->conn->connect_error) {
           // die("Connection failed: " . $conn->connect_error);
           return false;
          }
          return true;
    }

    public function insertData($task)
    {
        $this->connect();
        $query="INSERT INTO todo(task) values ('${task}')";
        if($this->conn->query($query)==false){
            return false;
        }
    
        return true;

    }
    
    public function executeQuerry($query)
    {
       // $conn='';
    
       $this->connect();
    
        if ($this->conn->query($query) == false)
         {
        
            die( "Error: "  . $this->conn->error);
            
           
          }
          return $this->conn->query($query);      
    }

}



?>