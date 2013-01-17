	<div id="header">
		
	<?PHP
		if(isset($_SESSION["username"])){
	
			?><p class="welcome">Welcome <span><? echo $_SESSION['username']['un']; ?></span></p><?
	
		}
	?>



	</div>
	<div id="header2">
		<a href="#" class="logo"><span class="one">Food</span class="one"><img src="images/z2.png" alt="Z"/><span class="two">one</span>
		</a>

		<?PHP
			if(isset($_SESSION["username"])){
	 		?><a href="?controller=session&get=logout" class="loginbtn">Log Out</a><?
				}else{
			?><a href="?controller=blog&get=showlogin" class="loginbtn">Log in</a><?
			}
		?> 

	</div>	