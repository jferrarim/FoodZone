<?
class ckUser{
	public function checkUser($data){
		$salt = 'salt';
		//$newUn = md5($salt.$data["un"]);
		$newPass = md5($salt.$data["pass"]);
	
		$db = new \PDO("mysql:hostname=127.0.0.1;port=3306;dbname=foodZone","root","root");
		
		$query = "select userName, password from users
					where userName = :un and password = :pass";
		
		$statement = $db->prepare($query);
		
		$statement->execute(array(":un"=>$data["un"], ":pass"=>$newPass));
		
		$result = $statement->fetchAll();
		
        $isgood = $statement->rowCount();
		
		if($isgood > 0){
			return 1;
		}else{
			return 0;
		}
	}
	
	public function createUser($uemail, $uname, $pass, $fullname){
		
		$salt = 'salt';
		$newPass = md5($salt.$pass["pass"]);
	
		$db = new \PDO("mysql:hostname=127.0.0.1;port=8889;dbname=ssl","root","root");
		
		$query = "insert into users (email ,username, password, fullname) values (?, ?, ?, ? )";
		$statement = $db->prepare($query);
		$statement->execute(array($uemail,$uname,$newPass, $fullname));
	}
}
