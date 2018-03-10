
<?php 

include('connection.php');
class ViewPost{

         private $db;

	public function __construct(){
		$con=new Database();
		$this->db=$con->connect_database();
	}

	public function category_view(){
		$query="SELECT * FROM category";
		$result=mysqli_query($this->db,$query);
		return $result;
	}

	public function category_view_by_id($id){
		$query="SELECT * FROM category where cat_id='$id'";
		$result=mysqli_query($this->db,$query);
		return $result;
	}         
        
        public function view_all_post(){
		$query="SELECT * FROM view_post ";
		$result=mysqli_query($this->db,$query);
		return $result;
	}
                
         public function view_by_post_id($id){
		$query="SELECT * FROM view_post WHERE id='$id' ";
		$result=mysqli_query($this->db,$query);
		return $result;
	}
        
        
        public function view__post_category_id($id){
		$query="SELECT * FROM view_post WHERE cat_id='$id'  ";
		$result=mysqli_query($this->db,$query);
		return $result;
	}
        

        public function view_post_latest(){
		$query="SELECT * from view_post  order by id DESC LIMIT 4 ";
		$result=mysqli_query($this->db,$query);
		return $result;
	}
        
        public function view_post_lates_next(){
		$query="SELECT * FROM view_post where id BETWEEN 1 and 8  order by id DESC";
		$result=mysqli_query($this->db,$query);
		return $result;
	}
        
        

	
}
