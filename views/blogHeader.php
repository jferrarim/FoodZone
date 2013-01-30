	
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
	<div id="header">
		
	<?PHP

		// if logged in display the username
		if(! empty($_SESSION["username"]['un'])){
	
			?><p class="welcome">Welcome <span><? echo $_SESSION['username']['un']; ?></span></p><?
	
		}
	?>



	</div>
	<div id="header2">
		<a href="?controller=home" class="logo"><span class="one">Food</span class="one"><img src="images/z2.png" alt="Z"/><span class="two">one</span>
		</a>

		<?php
		
			// if logged in display log in, if logged out display logged out
			if(isset($_SESSION["username"]['un'])){
	 		?><a href="?controller=session&get=logout" class="loginbtn">Log Out</a><?
				}else{
			?><a href="?controller=blog&get=showlogin" class="loginbtn">Log in</a><?
			}
		?> 

	</div>	