<form action=<?php echo $_SERVER['PHP_SELF']; ?> method='post'>
	Blog Title
	<input type="text" name= "title" id="title" value="<?php print $this->var['title'];?>"><br />
	Blog Content<br />
	<textarea rows="20" cols="50" name="blogcontent" id="blogcontent"><?php print $this->var['blogcontent'];?></textarea><br />
	<input type="submit" value="submit">
</form>
