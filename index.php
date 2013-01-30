<?PHP
	
	session_start();

	if(!empty($_GET["controller"])){
		
	
		if($_GET["controller"]==""){	
		
			include('controllers/blog.php');
			
		}else if($_GET["controller"]=="blog"){
			
			include('controllers/blog.php');
		
		}else if($_GET["controller"]=="home"){
			
			include('controllers/home.php');
		
		}else if($_GET["controller"]=="session"){
			
			include('controllers/session.php');
		}
	
	}else{
		
	include('controllers/blog.php');
}		
?>