		<div id="page">
			<?PHP

				if(isset($_SESSION["username"])){
					echo "<a href='?controller=blog&get=showaddform' class='newpost'><i class='icon-comment-alt'></i> new post</a>";
				}
			?>
		<h1>Blog</h1>
		<ul class="categories">
			<li><a href="?controller=blog" class="selected">List All</a></li>
			<li><a href="?controller=blog&get=shownews">News</a></li>
			<li><a href="?controller=blog&get=showrecipes">Recipes</a></li>
		</ul>
		<?PHP
			foreach($par as $x){
				echo "<div class='post'>";
				echo "<div class='image'>";
				echo "<a href='#'><img src=".$x["postImage"]." width='200' height='200' alt='banana bread'></a>";
				echo "</div>";
				echo "<div class='post-right'>";
				echo "<h2>".$x["title"]."</h2>";
				echo "<p class='subtitle'>Posted on <span>".$x["date"]."</span> by <a href='#' class='author'>".$x["username"]."</a>";
				echo "</p>";
				echo "<p>".$x["description"]."</p>";
				echo "<p><a class='facebook-like'>Like</a> 150 Likes</p>";
				echo "</div>";
				echo "<div class='accordion'>";
				echo "<div class='section ingredients'>";
				echo "<a href='#'><h4><i class='icon-plus'></i> Ingredients</h4></a>";
				echo "<div>".$x["ingredients"]."</div>";	
				echo "</div>";
				echo "<div class='section directions'>";	
				echo "<a href='#'><h4><i class='icon-plus'></i> Directions</h4></a>";
				echo "<div>".$x["directions"]."</div>";	
				echo "</div>";
				echo "<div class='section comments'>";	
				echo "<a href='#'><h4><i class='icon-plus'></i> Comments</h4></a>";
				echo "<div>".$x["comments"]."</div>";	
				echo "</div>";	
				echo "</div>";

				if(isset($_SESSION["username"])){
	 	
	 				echo "<a href='?controller=blog&get=deletepost&id=".$x['id']."'' class='deletebtn'><i class='icon-remove-sign'></i> Delete</a>";
	 				echo "<a href='?controller=blog&get=showeditform&id=".$x['id']."' class='editbtn'><i class='icon-edit'></i> Edit</a>";
				}

				echo "<div class='border'></div>";	
				echo "</div>";
			};
		?>	
	</div>