<div id="page">
			<?PHP

				if(isset($_SESSION["username"])){
					echo "<a href='?controller=blog&get=showaddform' class='newpost'><i class='icon-comment-alt'></i> new post</a>";
				}
			?>
		<h1>Blog</h1>
		<ul class="categories">
			<li><a href="?controller=blog" class="selected">List All</a></li>
			<li><a href="?controller=blog&get=showbycategory&category=news">News</a></li>
			<li><a href="?controller=blog&get=showbycategory&category=recipe">Recipes</a></li>
		</ul>