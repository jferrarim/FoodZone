<?php
include("model/viewModel.php");
include("model/blogModel.php");
include("model/imageModel.php");

$getv = new viewModel();
$bmodel = new blogModel();
$imgmodel = new img();

// always display the blog header w/ this controller
$getv->getView("views/blogHeader.php");

if(!empty($_GET["get"])){
	
	if($_GET["get"]=="blog"){
		
		// retrieve all blog posts
		$data = $bmodel->getAllPosts();
		$getv->getView("views/blog.php",$data);
	
	}


	else if($_GET["get"]=="showbycategory"){	

		// get the category, use it to pull all post of that category
		$getv->getView("views/category.php", array(
			'categories' => $bmodel->getPosts($_GET["category"]),
			'page' => $_GET["category"],
		));

	}


	else if($_GET["get"]=="showdetail"){

		// get the category, use it to pull all post of that category
		$getv->getView("views/postDetail.php", array(
			'ingredients' => $bmodel->getIngredients($_GET["id"]),
			'post' => $bmodel->getPost($_GET["id"]),
		));
	}


	else if($_GET["get"]=="showlogin"){

		// show the login form
		$getv->getView("views/loginForm.php");
	
	}


	else if($_GET["get"] == "deletepost"){
		
		// delete post with ID
		$deletedata = $bmodel->deletepost($_GET["id"]);
		$deletedata = $bmodel->getAllPosts();
		$getv->getView("views/blog.php", $deletedata);
	
	}

	else if($_GET["get"] == "showeditform"){

		// get the post id from the blog list and display the detail view
		$editdata = $bmodel->getPost($_GET["id"]);
		$getv->getView("views/editForm.php", $editdata);

	}


	else if($_GET["get"] == "editpost"){
		
		// upload the new picture, store the new filename and the new title
		$imgmodel->pictureUpload($_FILES["fileName"],$_POST["title"]);
		
		// update the blog post
		$bmodel->update($_POST["category"], $_POST["title"], $_POST["description"], $_POST["ingredients"], $_POST["directions"], $_POST["pId"]);

		if( !empty($_FILES["fileName"]["name"])){
			$bmodel->updateImage($_POST["title"], $_POST["pId"]);
			var_dump($_FILES["fileName"]);
		};

		$data = $bmodel->getAllPosts();
		$getv->getView("views/blog.php",$data);

	}


	else if($_GET["get"]=="showaddform"){
		
		// show the add form
		$getv->getView("views/postForm.php");

	}

	else if($_GET["get"] == "addpost"){
		
		// upload the new picture, store the filename and the title
		$imgmodel->pictureUpload($_FILES["fileName"],$_POST["title"]);
		
		// take the values from the input form and store it to the database
		$bmodel->addpost($_SESSION["username"]["un"], $_POST["title"], $_POST["category"], $_POST["title"], $_POST["description"], $_POST["ingredients"], $_POST["directions"], $_POST["date"]);
		$data = $bmodel->getAllPosts();
		$getv->getView("views/blog.php",$data);

	}

}


else
{	
	// retrieve all blog posts
	$data = $bmodel->getAllPosts();
	$getv->getView("views/blog.php",$data);

}

// always show the footer view w/ this controller
$getv->getView("views/footer.php");
		
?>