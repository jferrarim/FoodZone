<a href="?controller=blog" class="backbtn"><i class="icon-arrow-left"></i> back</a>
<div id="page">
	<h1>New Post</h1>
	<div class="post">

		<div id="outerForm">			
            <form method="post" enctype="multipart/form-data" action="?controller=blog&get=addpost">
            	<div id="formFields">
            		<label>Upload a post image</label>
      	    		<input class="upload" type="file" name="fileName" />
      	    		<select name="category">
  						<option value="news">news</option>
 						<option value="recipe">recipe</option>
  					</select>
					<input class="field" type="text" name="title" value="" placeholder="Post Title">
					<textarea class="field" name="description" value="" placeholder="Description"></textarea>
					<textarea rows="12" cols="1" wrap="hard" class="field" name="ingredients" value="" placeholder="Ingredients"></textarea>
					<textarea class="field" name="directions" value="" placeholder="Instructions"></textarea>
					<input class="submit" type="submit" value="Submit"/>
				</div>
			</form>
		</div>

	</div>
</div>	