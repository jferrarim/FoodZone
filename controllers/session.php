<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>FoodZone</title> 
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
</head> 
<body>
<?
include 'model/viewModel.php';
include 'model/checklogin.php';

$getView = new viewModel();
$logins = new ckUser();

if(isset($_GET["get"])){
	$get = $_GET["get"];
}else{
	$get = "";
}

if($get==""){
	
	$getView->getView("views/blogHeader.php");
	$getView->getView("views/loginForm.php");
	$getView->getView("views/footer.php");

}else if($get=="userlogin"){
	
	$data = $getView->getView("views/loginForm.php");

}else if($get=="checklogin"){
	
	$data = array("un"=>$_POST["uname"],
				"pass"=>$_POST["pass"]);
	$test = $logins->checkUser($data);
	
	if($test == 1){
		$_SESSION['loggedin'] = 1;
		$_SESSION['username'] = $data;
		$getView->getView("views/blogHeader.php");
		//$getView->getView("views/blog.php");
		//$getView->getView("views/footer.php");
		
	}else{
		$getView->getView("views/blogHeader.php");
		$getView->getView("views/loginForm.php");
		$getView->getView("views/footer.php");
		
	}
}else if($get=="logout"){
	$_SESSION["loggedin"] = 0;
	$_SESSION["username"] = null;
	$_SESSION["username"]["un"] = null;
	//$_SESSION["captcha"] = "";
	session_destroy();
	$getView->getView("views/blogHeader.php");
	$getView->getView("views/loginForm.php");
	$getView->getView("views/footer.php");
	
}else{
	
	$getView->getView("views/blogHeader.php");			
	$getView->getView("views/loginForm.php");
	$getView->getView("views/footer.php");	
}



?>	
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/custom.js" type="text/javascript"></script>
</body>
</html>
</html>
	
		