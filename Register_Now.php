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
		<?php  
			if(isset($_POST['registernow'])){
			include ("config.php");
			$user_name = mysqli_real_escape_string($conn, $_POST['username']);
			$user_email = mysqli_real_escape_string($conn, $_POST['email']);
			$user_pass = mysqli_real_escape_string($conn, md5($_POST['password']));
			$confirm = mysqli_real_escape_string($conn, md5($_POST['confirm']));
			
			$sql = "SELECT EMAIL FROM SIGNIN WHERE EMAIL = '{$user_email}'";
			$result = mysqli_query($conn, $sql) or die("Quarry Failed.");

			// $pass_check = "SELECT EMAIL FROM SIGNIN WHERE PASSWORD != '{$confirm}'";
			// $result2 = mysqli_query($conn, $sql) or die("Quarry Failed.");

			if ($user_pass != $confirm){
				echo '<p style="color: red; text-align: center;"> PASSWORD NO MATCHED</p>';
			}


else{
		if (mysqli_num_rows($result) > 0) {
				echo '<p style="color: red; text-align: center;"> Email or UserName Already Exsist. </p>';
			}

		else{
			$sql1 = "INSERT INTO SIGNIN (EMAIL,PASSWORD,CONFIRM,USERNAME) 
						 VALUES ('{$user_email}', '{$user_pass}', '{$confirm}', '{$user_name}')";

				if(mysqli_query($conn, $sql1)){
					header("Location: http://localhost/php/PROJECTX/index.php");
				}
			}
		}	
			
	}
	
	
		
			?>


				<form class="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<b><h1 style="text-align: center; color: white;">Let's Get Started</h1></b>
				<b><p style="text-align: center; color: white; padding-bottom: 10px;">or Create a new accout if not registered yet</p></b>
		
				<div class="inside-form">
				<h1 style="text-align: center; color: #F9CE19;">Register Now</h1>
				<i style="font-size: 25px; color: white; margin-left: 25px;" class="fa fa-user"></i>
				<input class="input" type="txt" name="username" placeholder="Enter your name" required><br>

				<i style="font-size: 25px; color: white; margin-left: 25px;" class="fa fa-envelope"></i>
				<input class="input" type="email" name="email" placeholder="Enter your email id" required>

				<br>
				<i style="font-size: 25px; color: white; margin-left: 25px;" class="fa fa-key"></i>
				<input id="pass-1" class="input" type="Password" name="password" placeholder="Enter your Password" required><br>

				<i style="font-size: 25px; color: white; margin-left: 25px;" class="fa fa-key"></i>
				<input id="pass-2" class="input" type="Password" name="confirm" placeholder="Confirm your Password" required><br>

				<p style="color: white; margin-left: 30px;"><input type="checkbox" name="checkbox" required>I Agree with <a href="">Terms & Conditions.</a> </p>

				<input type="submit"  name="registernow" value="Register Now" class="signin">
				<p style="color: white; text-align: center;">Already have an account?<a href="Sign_In.php"> Sign In.</a></p>
				</div>
			</form>	 


		<?php  include ("chat.php") ?>	
</body>
</html>

