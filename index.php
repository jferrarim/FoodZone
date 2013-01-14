<?PHP

	if(!empty($_GET["controller"])){
		
	
		if($_GET["controller"]==""){	
		
			include('controllers/blog.php');
			
		}else if($_GET["controller"]=="blog"){
			
			include('controllers/blog.php');
		} 
	
	}else{
		
		include('controllers/blog.php');
}		
?>