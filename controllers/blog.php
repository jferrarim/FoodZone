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
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
 	 	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
 		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
	</script>
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
		$getv->getView("views/blog.php",$data);
	
	}


	else if($_GET["get"]=="showbycategory"){	

		//$data = $bmodel->getPosts($_GET["category"]);
		$getv->getView("views/category.php", array(
			'categories' => $bmodel->getPosts($_GET["category"]),
			'page' => $_GET["category"],
		));

	}


	else if($_GET["get"]=="showdetail"){

		//$data = $bmodel->getPost($_GET["id"]);
		//$getv->getView("views/postDetail.php", $data);

		$getv->getView("views/postDetail.php", array(
			'ingredients' => $bmodel->getIngredients($_GET["id"]),
			'post' => $bmodel->getPost($_GET["id"]),
		));
	}


	else if($_GET["get"]=="showlogin"){

		$getv->getView("views/loginForm.php");
	
	}


	else if($_GET["get"] == "deletepost"){
		
		$deletedata = $bmodel->deletepost($_GET["id"]);
		$deletedata = $bmodel->getAllPosts();
		$getv->getView("views/blog.php", $deletedata);
	
	}


	else if($_GET["get"] == "showeditform"){

		$editdata = $bmodel->getPost($_GET["id"]);
		$getv->getView("views/editForm.php", $editdata);

		//var_dump($editdata);
	}


	else if($_GET["get"] == "editpost"){
		
		$imgmodel->pictureUpload($_FILES["fileName"],$_POST["title"]);
		
		$bmodel->update($_POST["category"], $_POST["title"], $_POST["description"], $_POST["ingredients"], $_POST["directions"], $_POST["pId"]);
		$data = $bmodel->getAllPosts();
		$getv->getView("views/blog.php",$data);

	}


	else if($_GET["get"]=="showaddform"){
		
		$getv->getView("views/postForm.php");

	}


	else if($_GET["get"] == "addpost"){
		
		$imgmodel->pictureUpload($_FILES["fileName"],$_POST["title"]);
		
		//var_dump($_FILES["fileName"]);

		$bmodel->addpost($_SESSION["username"]["un"], $_POST["title"], $_POST["category"], $_POST["title"], $_POST["description"], $_POST["ingredients"], $_POST["directions"], $_POST["date"]);
		$data = $bmodel->getAllPosts();
		$getv->getView("views/blog.php",$data);

		//echo $_FILES["fileName"], $_POST["category"], $_POST["title"], $_POST["description"], $_POST["ingredients"], $_POST["directions"];

	}

}


else
{
	$data = $bmodel->getAllPosts();
	$getv->getView("views/blog.php",$data);

}


$getv->getView("views/footer.php");
		
?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/custom.js" type="text/javascript"></script>
</body>
</html>