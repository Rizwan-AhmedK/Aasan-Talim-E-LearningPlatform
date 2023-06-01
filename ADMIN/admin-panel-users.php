<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin-panel-posts.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Admin Panel | Users</title>
</head>

<<?php include ("admin-panel-header.php") ?>
<body>
	<h1 style="text-align: center;">USERS DATA</h1>
<div class="users-data-table">
	<table>
	  <tr>
		<th>User Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Role</th>
		<th>Edit</th>
		<th>Remove</th>
	  </tr>

	  <tr>
	  	<td>Rizwan Ahmed</td>
	  	<td>rizwanshahab60@gmail.com</td>
	  	<td>Rizwan Ahmed</td>
	  	<td>Admin</td>
	  	<td><a href="admin-panel-update-post.php"> <button> <i class="fa fa-edit"></i></button></a> </td>
	  	<td><button onclick="document.getElementById('id01').style.display='block'"> <i class ="fa fa-trash"></i></button> </td>
	  </tr>
	</table>
</div>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>

      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="button" class="deletebtn">Delete</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
