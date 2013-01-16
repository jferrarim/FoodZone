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
include("model/imageModel.php");

$getv = new viewModel();
$bmodel = new blogModel();
$imgmodel = new img();

$getv->getView("views/blogHeader.php");

if(!empty($_GET["get"])){
	
	if($_GET["get"]=="blog"){
		
		$data = $bmodel->getAllPosts();
		$getv->getView("views/blog.php", $data);
	
	}else if($_GET["get"]=="showbycategory"){	

		$data = $bmodel->getPosts($_GET["category"]);
		$getv->getView("views/blog.php", $data);

	}else if($_GET["get"]=="showlogin"){

		$getv->getView("views/loginForm.php");
	
	}else if($_GET["get"] == "deletepost"){
		
		$deletedata = $bmodel->deletepost($_GET["id"]);
		$deletedata = $bmodel->getAllPosts();
		$getv->getView("views/blog.php", $deletedata);
	
	}else if($_GET["get"] == "showeditform"){

		$editdata = $bmodel->getPost($_GET["id"]);
		$getv->getView("views/editForm.php", $editdata);

	}else if($_GET["get"] == "updatepost"){
		
		$bmodel->update($_POST["uname"], $_POST["image"], $_POST["title"], $_POST["desc"], $_POST["ingredients"], $_POST["directions"], $_POST["id"]);
		$getv->getView("views/searchForm.php");
		$data = $bmodel->getAllPosts();
		$getv->getView("views/body.php",$data);

	}else if($_GET["get"]=="showaddform"){
		
		$getv->getView("views/postForm.php");

	}else if($_GET["get"] == "addpost"){
		
		//$imgmodel->pictureUpload($_FILES["fileName"],$_POST["title"]);
		//$bmodel->addpost($_SESSION["username"]["un"], $_POST["category"], $_POST["title"], $_POST["description"], $_POST["ingredients"], $_POST["directions"]);
		$data = $bmodel->getAllPosts();
		$getv->getView("views/blog.php",$data);

		echo $_FILES["fileName"], $_POST["category"], $_POST["title"], $_POST["description"], $_POST["ingredients"], $_POST["directions"];

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