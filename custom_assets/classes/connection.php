<?php

 class Database{
    
     public function connect_database(){
         $da_host="localhost";
         $db_user="root";
         $db_password="";
         $da_name="blog";
        
         $link=mysqli_connect($da_host, $db_user, $db_password, $da_name);
         $link->query("SET CHARACTER SET utf8");   
        return $link;
     }
}
        
