<a href="?controller=blog" class="backbtn"><i class="icon-arrow-left"></i> back</a>
<div id="page">
	<h1>Edit Post</h1>
	<div class="post">

		<div id="outerForm">			
            <form method="post" enctype="multipart/form-data" action="?controller=blog&get=editpost">
            	<div id="formFields">
            		<label>Upload a post image</label>
      	    		<input class="upload" type="file" name="fileName" />
      	    		<select name="category">
      					<option value="news">news</option>
 						<option value="recipe" <?php if($par[0]['category'] == 'recipe'){ echo "selected='true'";}?> >recipe</option>
  					</select>
					<input class="field" type="text" name="title" value="<?php echo $par['title']; ?>" placeholder="Post Title">
					<input class="field large" name="description" value="<?php echo $par['description']; ?>" placeholder="description"></textarea>
					<input class="field large" name="ingredients" value="<?php echo $par['ingredients']; ?>" placeholder="Ingredients"></textarea>
					<input class="field large" name="directions" value="<?php echo $par['directions']; ?>" placeholder="instructions"></textarea>
					<input type="hidden" name="pId" value="<?php echo $par['id']; ?>"/>
					<input class="submit" type="submit" value="Submit"/>
				</div>
			</form>
		</div>

	</div>
</div>	