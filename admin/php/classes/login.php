<?php
include("../custom_assets/classes/connection.php");

class login{
    private $db;    
    public function __construct() {
        $login=new Database();
        $this->db=$login->connect_database();
    }

    public function admin_login($userName,$password) {
       
         $query="SELECT * FROM admin WHERE username='$userName' AND password='$password' ";
        $result= mysqli_query($this->db, $query);
                
        return $result;
    }
    
    public function db_close(){
        mysqli_close($this->db);
    }
    
}