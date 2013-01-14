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
<?PHP
include("model/viewModel.php");
include("model/blogModel.php");

$getv = new viewModel();
$bmodel = new blogModel();

$getv->getView("views/blogHeader.php");

if(!empty($_GET["get"])){
	
	if($_GET["get"]=="blog"){
		
		$getv->getView("views/blog.php", $data);
		
	}else if($_GET["get"]=="showlogin"){

		$getv->getView("views/loginForm.php");
	}

}else{
	$data = $bmodel->getAllPosts();
	$getv->getView("views/blog.php", $data);
}
	$getv->getView("views/footer.php");
		
?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/custom.js" type="text/javascript"></script>
</body>
</html>