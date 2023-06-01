 <?php 
session_start();

if (isset($_SESSION['USERNAME'])) {
  header("Location: http://localhost/php/PROJECTX/index.php");
}
 ?>


<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSS/Sign_In.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body {margin:0;font-family:Arial; background-image: url("IMAGES/1.jpg"); background-size: cover;}



</style>
</head>



<body>

	<form class="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<b><h1 style="text-align: center; color: white;">Let's Get Started</h1></b>
				<b><p style="text-align: center; color: white; padding-bottom: 10px;">or Create a new accout if not registered yet</p></b>
		
				<div class="inside-form">
				<h1 style="text-align: center; color: #F9CE19;">Sign in</h1>
				<i style="font-size: 25px; color: white; margin-left: 25px;" class="fa fa-user"></i>
				<input class="input" type="email" name="EMAIL" placeholder="Enter your id" required>
				<br>
				<i style="font-size: 25px; color: white; margin-left: 25px;" class="fa fa-key"></i>
				<input class="input" type="Password" name="PASSWWORD" placeholder="Enter your Password" required>
				<p style="text-align: center;"><a href="#"> Forget Password?</a></p>

				<input type="submit" name="login" class="signin" value="Login">
				<p style="color: white; text-align: center;">Don't have an account?<a href="Register_Now.php"> Sign up.</a></p>
				</div>
			</form>	 

			 <?php 
			if (isset($_POST['login'])) {
			include ("config.php");
			$user_email = mysqli_real_escape_string($conn, $_POST['EMAIL']);
			$user_pass = md5($_POST['PASSWWORD']);

			$sql = "SELECT ID, USERNAME ,EMAIL FROM SIGNIN WHERE EMAIL = '{$user_email}' AND PASSWORD = '{$user_pass}'";
			$result = mysqli_query($conn, $sql) or die("Quarry Failed.");

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					session_start();
					$_SESSION['ID'] = $row['ID'];
					$_SESSION['USERNAME'] = $row['USERNAME'];
					$_SESSION['EMAIL'] = $row['EMAIL'];

					header("Location: http://localhost/php/PROJECTX/index.php");
				}
			}else{ 
				echo '<h3 style="color: red; background-color: white; display: inline-block; margin-left: auto; margin-right: auto;"> EMAIL or password is not found. please try again.</h3>';
			}
				
			}
			?>
			} 

			<?php  include ("chat.php") ?>
</body>
</html>

