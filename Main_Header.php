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
                  <p><?php echo $_SESSION['USERNAME']; ?><br> <span>Admin</span></p><img style="border-radius: 80%;" src="IMAGES/12.jpeg" alt="Admin" width="45" height="45"><i class="fas fa-angle-down"></i>
                </a>
                 
                <div class="profile-dropdown">
                    <ul>
                      <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                      <li><a href="#"><i class="fas fa-sliders-h"></i> Settings</a></li>
                      <li><a href="Logout.php"><i class="fas fa-sign-out-alt"></i> Signout</a></li>
                  </ul>
                </div>
                
              </li>
          </ul>
        </div>
    </div>
</div>
</div>
<!-- <span style="font-size: 40px;">Books & Company</span><span style="float: right; font-size: 20px; position: absolute; top: 10px; right: 10px;"><a href="Logout.php">Logout</a> hello, <?php #echo $_SESSION['USERNAME']; ?></span> -->

<div class="topnav" id="myTopnav">
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
<!--   <button style="float: right; padding: 12px; margin-top: 10px; margin-right: 5px; background-color: darkblue; color: white; border: 1px solid darkblue;">Search</button>
 -->  <input style="background-image: url('IMAGES/Searching.png');" class="Search" type="search" name="Search" placeholder="Search your book">

  <a href="index.php">Home</a>
  
<!-- drop down menu starts -->
<div class="dropdown"><button class="dropbtn"><b>Book Shelf</b> <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <div class="row">
      <div class="column">
        <h3>School Books</h3>
        <a href="Class_1_to_8.php">Class 1 to 8</a>
        <a href="#">Class 9th Arts</a>
        <a href="#">Class 10th Arts</a>
      </div>
      
      <div class="column">
        <h3>College Books</h3>
        <a href="#">Class 11th Pre-Eng</a>
        <a href="#">Class 12th Pre-Eng</a>
        <a href="#">Class 12th Pre-Med</a>

      </div>

      <div class="column">
        <h3>Universities Books</h3>
        <a href="#">Business Department</a>
        <a href="#">Electronics Department</a>
        <a href="#">Power Department</a>
      </div>
        <div class="column">
        <h3>Universities Books</h3>
        <a href="#">BA PART-II</a>
        <a href="#">BSC PART-I</a>
        <a href="#">BSC PART-II</a>
      </div>        
      
    </div>

    <div class="row">
      <div class="column">
        <h3>School Books</h3>
        <a href="#">Class 9th Science</a>
        <a href="#">Class 10th Science</a>
        <a href="#">Class 9th & 10th Notes</a>
      </div>

      <div class="column">
        <h3>College Books</h3>
       <a href="#">Class 11th Pre-Med</a>
        <a href="#">Class 11th & 12th Arts</a>
        <a href="#">Class 11th & 12th Notes</a>
      </div>

      <div class="column">
        <h3><h3>Universities Books</h3>
        <a href="#">Computer Science Department</a>
        <a href="#">Software Engineering Department</a>
        <a href="#">BA PART-I</a>
      </div>
       
       <div class="column">
        <h3>Others</h3>
        <a href="#">Novels</a>
        <a href="#">Story Books</a>
        <a href="#">Poetry</a>
      </div>         
      
    </div>
  </div>
</div>
<!-- drop down ends here -->
<a href="#contact">Contact</a>
<a href="About.php">About Us</a>
<a href="Blog.php">Blog</a>
  <a href="Discussion_Form.php">Students Forum</a>
<div class="dropdown"><button class="dropbtn"><b>Quiz</b> <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <div class="row">
      <div class="column">
        <h3>School Level</h3>
        <a href="#">Class 9th</a>
        <a href="#">Class 10th</a>
      </div>
      
      <div class="column">
        <h3>College Level</h3>
        <a href="#">Class First Year</a>
        <a href="#">Class Intermediate</a>
      </div>

      <div class="column">
        <h3>Entry Test Preperation</h3>
        <a href="#">Pre Medical</a>
        <a href="#">Pre Enginerring</a>
        <a href="#">Arts</a>
      </div>

      <div class="column">
        <h3>Others</h3>
        <a href="#">General Knowledge</a>
        <a href="#">Gneral Science</a>
        <a href="#">Pakistan Studies</a>
      </div>
                
    </div>

  
  </div>
</div>
  <a style="float: right; background-color: red; padding: 10px; margin-top: 10px; margin-left: 5px; margin-right: 5px; border-radius: 5px;" href="Sign_In.php">Sign In</a>
  <a style="float: right; background-color: red; padding: 10px; margin-top: 10px; margin-left: 5px; margin-right: 5px; border-radius: 5px;" href="Register_Now.php">Register now</a>

</div>

<script type="text/javascript">
  document.querySelector(".right ul li").addEventListener("click", function(){
  this.classList.toggle("active");
});

</script>
<!-- header ends here -->