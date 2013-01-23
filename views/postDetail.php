		<a href="?controller=blog" class="backbtn"><i class="icon-arrow-left"></i> back</a>
		<div id="page">
			
		<h1>Detail</h1>
		
		<div class="post">
		<div class="image">
			<a href='#'><img src="postImages/<?= $par['post']["title"] ?>.jpg" width='200' height='200' alt="<?= $par['post']["title"] ?>"></a>
		</div>

		<?php			
				echo "<div class='post-right'>";
				echo "<h2 class='title'>".$par['post']["title"]."</h2>";
				echo "<p class='subtitle'>Posted on <span>".$par['post']["date"]."</span> by <a href='#' class='author'>".$par['post']["username"]."</a>";
				echo "</p>";
				echo "<p class='length'>".$par['post']["description"]."</p>";
				echo "<p><g:plusone></g:plusone><div class='fb-like' data-href='http://localhost:8888/FoodZone/' data-send='false' data-width='300' data-show-faces='false'></div></p>";
				echo "</div>";
				echo "<div class='accordion'>";

				if($par['post']['category'] == 'recipe'){
					echo "<div class='section ingredients'>";
					echo "<h4><i class='icon-shopping-cart'></i> Ingredients</h4>";
					//echo "<div>".$par[0]["ingredients"]."</div>";	
					echo "<form><ul>";
					foreach($par['ingredients'] as $ingredient){
						echo "<li><input class='check' type='checkbox' name='ingredient' id='".$ingredient["id"]."'><label for='".$ingredient["id"]."'>".$ingredient["content"]."</label></li><br>";
					}
					echo "</ul></form>";	
					echo "</div>";
					echo "<div class='section directions'>";	
					echo "<h4><i class='icon-dashboard'></i> Directions</h4>";
					echo "<div>".$par['post']["directions"]."</div>";	
					echo "</div>";
				};
				echo "<div class='section comments'>";	
				echo "<h4><i class='icon-comments'></i> Comments</h4>";
				echo "<div><div class='fb-comments' data-href='http://localhost:8888/FoodZone' data-width='700' data-num-posts='1'></div></div>";	
				echo "</div>";	
				echo "</div>";

				if(isset($_SESSION["username"])){
	 	
	 				echo "<a href='?controller=blog&get=deletepost&id=".$par['post']['id']."'' class='deletebtn'><i class='icon-remove-sign'></i> Delete</a>";
	 				echo "<a href='?controller=blog&get=showeditform&id=".$par['post']['id']."' class='editbtn'><i class='icon-edit'></i> Edit</a>";
				}

				echo "<div class='border'></div>";	
				echo "</div>";
			
		?>	
	</div>