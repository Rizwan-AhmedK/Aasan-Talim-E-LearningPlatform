<?php 
session_start();

if (!isset($_SESSION['USERNAME'])) {
  header("Location: http://localhost/php/PROJECTX/Sign_In.php");
}
 ?>

 
 <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div style="width: 100%; height: 75px; background-color: white;" class="">
<div class="wrapper">
    <div class="navbar">
        
        <div class="right">
            <ul>
              <li>
                <a href="#">
                  <p><?php echo $_SESSION['USERNAME']; ?><br> <span>Admin</span></p><img style="border-radius: 80%;" src="12.jpeg" alt="Admin" width="45" height="45"><i class="fas fa-angle-down"></i>
                </a>
                 
                <div class="profile-dropdown">
                    <ul>
                      <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                      <li><a href="#"><i class="fas fa-sliders-h"></i> Settings</a></li>
                      <li><a href="../Logout.php"><i class="fas fa-sign-out-alt"></i> Signout</a></li>
                  </ul>
                </div>
                
              </li>
          </ul>
        </div>
    </div>
</div>
</div>
<div class="topnav" id="myTopnav" style="background-color: #05056D;">
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

  <a href="index.php">Science & Technology</a>
  
<!-- drop down menu starts -->
<a href="#">Health & Care</a>
  
<!-- drop down ends here -->
<a href="#contact">Education & Carrer</a>
<a href="About.php">Sports & Games Us</a>
<a href="Blog.php">Entertainment & Music</a>

<form> 
      <button style="background-color: red; padding: 11px; border: 1px solid red; margin-top: 10px; margin-right: 5px;  border-radius: 5px; float: right; color: white;"><i class="fa fa-bell"></i> Subscribe Now</button>
      <input style="padding: 10px; border-radius: 5px; width: 250px; float: right; margin-top: 10px; margin-right: 5px;" type="Email" name="subscribe-email" placeholder="Enter Your Email" required>
    </form>
</div>



<script type="text/javascript">
  document.querySelector(".right ul li").addEventListener("click", function(){
  this.classList.toggle("active");
});
</script>

<!-- header ends here -->