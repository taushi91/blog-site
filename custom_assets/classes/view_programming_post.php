
<?php 

include('connection.php');
class Project{

         private $db;

	public function __construct(){
		$con=new Database();
		$this->db=$con->connect_database();
	}

	public function project_view(){
		$query="SELECT * FROM project";
		$result=mysqli_query($this->db,$query);
		return $result;
	}
	
}
