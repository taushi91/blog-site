<?php

namespace custom_assets\classes;

class DatabaseClass {
    
    public function database() {
        $da_host="localhost";
        $db_user="root";
        $db_password="";
        $da_name="blog";
        
       $link=mysqli_connect($da_host, $db_user, $db_password, $da_name);
       
       
       return $link;
    }
}
