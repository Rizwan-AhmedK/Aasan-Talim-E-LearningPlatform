<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel | Update Post</title>
	<link rel="stylesheet" type="text/css" href="admin-panel.css">
</head>
<body>



<?php include ("admin-panel-header.php") ?>
<h2 class="admin-post-heading"> UPDATE POST</h2>
<div class="add-post">
<form>
	<label>Enter Post Title</label><br>
	<input type="text" name="post-title" required><br>

	<label>Enter Post author</label><br>
	<input type="text" name=""> <br>

	<label>Enter Post description</label><br>
	<textarea></textarea><br>

	<label>Enter Post Heading</label><br>
	<input type="text" name="post-Heading" required><br>

	<input type="file" name="post-title" value="Choose Image"> <br>
	<p style="color: red;">Note: Please choose (JPG, PNG, JPEG) format for image and your image size not more then 2 MB.</p>

	<input type="submit" name="post" value="Update Now">




</form>
</div>

</body>
</html>