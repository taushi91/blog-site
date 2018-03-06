<?php

include("../custom_assets/classes/connection.php");

class Admin{
    private $db;
    public function __construct() {
        $dbLink=new Database();
        $this->db=$dbLink->connect_database();
    }
    
    
    public function add_post($data,$date,$filename) {
        $query="Insert into post VALUES(null,'$data[cat_id]','$data[title]','$data[description]','$date','$filename','$data[writer_name]','1')";
        $result= mysqli_query($this->db, $query);
        return $result;
    }
    
    
    public function view_all_post(){
		$query="SELECT post.id,post.title,post.date,post.description,post.status,writer.name as name FROM `post`,writer where post.writer_id=writer.id";
		$result=mysqli_query($this->db,$query);
		return $result;
	}
    
    
    public function update_publication_status($id,$status){
        $query="UPDATE post SET status='$status' WHERE id='$id'";
        $result= mysqli_query($this->db,$query);
        return $result;
    }
    
    public function category_view(){
		$query="SELECT * FROM category";
		$result=mysqli_query($this->db,$query);
		return $result;
	}
        
        public function delete_post($id) {
            $query="delete from post where id='$id'";
		$result=mysqli_query($this->db,$query);
		return $result;
        }



        //writer select

        public function get_writer(){
        $query="SELECT * FROM writer";
        $result=mysqli_query($this->db,$query);
        return $result;
    }
}
