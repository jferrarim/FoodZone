<?
include 'model/viewModel.php';
include 'model/checklogin.php';

$getView = new viewModel();
$logins = new ckUser();

// if get is set check the username and password
if(isset($_GET["get"])){
	$get = $_GET["get"];
}else{
	$get = "";
}

if($get==""){
	
	// if there is no get variable show the header, login form and footer
	$getView->getView("views/blogHeader.php");
	$getView->getView("views/loginForm.php");
	$getView->getView("views/footer.php");

}else if($get=="userlogin"){
	
	$data = $getView->getView("views/loginForm.php");

}else if($get=="checklogin"){
	
	// get the values from the log in form, test against values in the database
	$data = array("un"=>$_POST["uname"],
				"pass"=>$_POST["pass"]);
	$test = $logins->checkUser($data);
	
	if($test == 1){
		$_SESSION['loggedin'] = 1;
		$_SESSION['username'] = $data;
		$getView->getView("views/blogHeader.php");
		$getView->getView("views/loginForm.php");
		$getView->getView("views/footer.php");
		
	}else{
		$getView->getView("views/blogHeader.php");
		$getView->getView("views/loginForm.php");
		$getView->getView("views/footer.php");
		
	}
}else if($get=="logout"){

	// set the username to null, destroy the session, show the login form
	$_SESSION["loggedin"] = 0;
	$_SESSION["username"] = null;
	$_SESSION["username"]["un"] = null;
	//$_SESSION["captcha"] = "";
	session_destroy();
	$getView->getView("views/blogHeader.php");
	$getView->getView("views/loginForm.php");
	$getView->getView("views/footer.php");
	
}else{
	
	// if there is no get variable show the header, login form and footer
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
	
		