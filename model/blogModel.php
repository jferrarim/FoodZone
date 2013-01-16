<?
class blogModel{
	
	//add, del, update, and view
	public function getAllPosts(){
		
		
		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
		
		$query = "select * from posts order by id DESC";
		
		$statement = $db->prepare($query);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		
		return $result;
		
	}
	
	public function getPosts($category){
		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodzone","root","root");
		
		$query = "select * from posts where category = :passedin";
		$statement = $db->prepare($query);
		
		$statement->execute(array(":passedin"=>$category));
		
		$result = $statement->fetchAll();
        
        return $result;
	    
	}

	public function addpost($un, $category, $title, $description, $ingredients, $directions){
		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
		$query = "insert into posts (username, category, title, description, ingredients, directions) values (?, ?, ?, ?, ?, ?)";
		$statement = $db->prepare($query);
		$statement->execute(array($un,$category,$title,$description,$ingredients,$directions));
	}
	
	public function deletepost($id){
		
		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
		$query = "delete from posts where id = :passedin";
		$statement = $db->prepare($query);
		
		$statement->execute(array(":passedin"=>$id));
		
	}
	
	public function update($uemail, $uname, $ufriends, $id){

		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
		$query = "update contactlist set email = ?, name = ?, friends = ? where id = ?";
		$statement = $db->prepare($query);
		$statement->execute(array($uemail,$uname,$ufriends,$id));

	}
			
}

?>

