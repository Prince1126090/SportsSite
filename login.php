<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script>

function validateForm(){
   var t=document.getElementById('username').value;
   var pass = document.getElementById('password').value; 
   
     if(t.length == 0||isNaN(t) == false){
      alert('Please enter any value');
      return false;}
	  else if(pass.length == 0){
		 alert('Please enter any password');
         return false;
	  }
   
}

 </script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" href="css/login.css"/>
<title>login page of sports zone</title>
</head>

<body>

<div class="fix main">

<div class="fix header">
<h1>SPORTS ZONE</h1>
</div>

<div class="fix navigation_bar">
<ul >
  <?php
  if($_COOKIE['id'])
  {
	  if($_COOKIE['id']=='1234'){
  ?>
  <li><a href="home.php">HOME</a></li>
  <li><a href="photo.php">PHOTOS</a></li>
  <li><a href="register.php">REGISTRATION</a></li>
  <li><a href="admin_page.php">ADMIN</a></li>
  <li><a href="logout.php">LOGOUT</a></li>
  <?php
   } else{
   ?>
   <li><a href="home.php">HOME</a></li>
   <li><a href="photo.php">PHOTOS</a></li>
   <li><a href="register.php">REGISTRATION</a></li>
   <li><a href="logout.php">LOGOUT</a></li>
   <?php
   }
  }else
  
  {
   ?>
   <li><a href="home.php">HOME</a></li>
  <li><a href="photo.php">PHOTOS</a></li>
  <li><a href="register.php">REGISTRATION</a></li>
  <li><a href="login.php">LOGIN</a></li>
   <?php
  }
   ?>
</ul>
</div>


 <div class="fix content">
 
 
 <div class="fix content_middle">
 <div class="fix login_form">
 <p class="fix form_p">LOGIN FORM</p>
 <?php
 if($_GET['name']=='username'){
	 
	echo '<p style="color:red;">'.'your username is wrong'.'</p>'; 
 }
 else if($_GET['pass']=='yes'){
	 
	echo '<p style="color:red;">'.'your password is wrong'.'</p>'; 
 }
 
 ?>
 <form method="post" action="login_process.php" name="wForm" onsubmit="return validateForm()">
 <h4 class="fix form_h4">Name:</h4>
 <input type="text" name="username" class="fix inputs" id="username"/>
 <h4 class="fix form_h4">Password:</h4>
 <input type="password" name="password" id="password" class="fix inputs" />
 <br />
 <input class="fix myButton" type="submit" value="Login" />
 </form>
 </div>
 </div>
 
 </div>
 
 </div>
 
 </div>

<div class="fix footer">
 <p class="fix footer_text1 ">Prince cse2k12</p>

</div>


 
</body>
</html>
