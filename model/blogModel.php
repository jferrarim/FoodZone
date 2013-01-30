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
	

	public function getPost($id){
		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
		
		$query = "select * from posts where id = :passedin";
		$statement = $db->prepare($query);
		
		$statement->execute(array(":passedin"=>$id));
		
		$result = $statement->fetchAll();
      
        return $result[0];

	}

	public function getPosts($category){
		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
		
		$query = "select * from posts where category = :passedin order by id DESC";
		$statement = $db->prepare($query);
		
		$statement->execute(array(":passedin"=>$category));
		
		$result = $statement->fetchAll();
       
        //throw new Exception("Error Processing Request: {$category}", 1);
       	

        return $result;


	    
	}

	 public function addpost($un, $postImage, $category, $title, $description, $ingredients, $directions, $date){
		
	 	$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
	 	$query = "insert into posts (username, postImage, category, title, description, ingredients, directions, date) values (?, ?, ?, ?, ?, ?, ?, ?)";
	 	$statement = $db->prepare($query);
	 	$statement->execute(array($un, $postImage, $category,$title,$description,$ingredients,$directions,$date));
 	}

	// public function addpost($un, $category, $title, $description, $ingredients, $directions){
		
	// 	$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
	// 	$query = "insert into posts (username, category, title, description, ingredients, directions) values (:username, :category, :title, :description, :ingredients, :directions)";
	// 	$statement = $db->prepare($query);
	// 	$statement->execute(array(":username"=>$un,":category"=>$category,":title"=>$title,":description"=>$description,":ingredients"=>$ingredients,":directions"=>$directions));
	// }
	
	public function deletepost($id){
		
		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
		$query = "delete from posts where id = :passedin";
		$statement = $db->prepare($query);
		
		$statement->execute(array(":passedin"=>$id));
		
	}
	
	public function update($category, $title, $description, $ingredients, $directions, $id){

		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
		$query = "update posts set category = ?, title = ?, description = ?, ingredients = ?, directions = ? where id = ?";
		$statement = $db->prepare($query);
		$statement->execute(array($category,$title,$description,$ingredients,$directions,$id));

	}

	public function updateImage($postImage, $id){

		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
		$query = "update posts set postImage =? where id = ?";
		$statement = $db->prepare($query);
		$statement->execute(array($postImage,$id));
	}

	public function getIngredients($id){

		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
		$query = "select ingredients.id, postId, content from ingredients
		inner join posts on ingredients.postId = posts.id and posts.id = :passedin order by id asc";
		$statement = $db->prepare($query);
		$statement->execute(array(":passedin"=>$id));

		$result = $statement->fetchAll();
      
        return $result;	
	}
			
}

?>

