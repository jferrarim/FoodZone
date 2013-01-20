		<div id="page">
			<?PHP

				if(isset($_SESSION["username"])){
					echo "<a href='?controller=blog&get=showaddform' class='newpost'><i class='icon-comment-alt'></i> new post</a>";
				}
			?>
		<h1>Blog</h1>
		<ul class="categories">
			<li><a href="?controller=blog" <?= (! isset($par['page']) or $par['page'] == '') ? 'class="selected"' : null ?>>List All</a></li>
			<li><a href="?controller=blog&get=showbycategory&category=news" <?= (isset($par['page']) and $par['page'] == 'news') ? 'class="selected"' : null ?>>News</a></li>
			<li><a href="?controller=blog&get=showbycategory&category=recipe" <?= (isset($par['page']) and $par['page'] == 'recipe') ? 'class="selected"' : null ?>>Recipes</a></li>
		</ul>

		<?PHP
			foreach($par as $x){
				echo "<div class='post'>";
				echo "<div class='image'>";
				echo "<a href='#'><img src='postImages/".$x["title"].".jpg' width='200' height='200' alt='".$x["title"]."'></a>";
				echo "</div>";
				echo "<div class='post-right'>";
				echo "<a class='title' href='?controller=blog&get=showdetail&id=".$x['id']."'><h2>".$x["title"]."</h2></a>";
				echo "<p class='subtitle'>Posted on <span>".$x["date"]."</span> by <a href='#' class='author'>".$x["username"]."</a>";
				echo "</p>";
				echo "<p>".$x["description"]."</p>";
				echo "<p><g:plusone></g:plusone><div class='fb-like' data-href='http://localhost:8888/FoodZone/' data-send='false' data-width='300' data-show-faces='false'></div></p>";
				echo "</div>";
				echo "<div class='accordion'></div>";

				if(isset($_SESSION["username"])){
	 	
	 				echo "<a href='?controller=blog&get=deletepost&id=".$x['id']."'' class='deletebtn'><i class='icon-remove-sign'></i> Delete</a>";
	 				echo "<a href='?controller=blog&get=showeditform&id=".$x['id']."' class='editbtn'><i class='icon-edit'></i> Edit</a>";
				}

				echo "<div class='border'></div>";	
				echo "</div>";
			};
		?>	
	</div>