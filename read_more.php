<?php
include 'database.php';
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/example.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<link rel="stylesheet" href="css/read_more.css"/>

<title>registration form of sports zone</title>
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


 <div style="padding-bottom:30px;" class="fix content">
 
 <div class="fix content_middle">

<?php
if($_GET['p']=='1'){
?>

<?php
    $p=$_GET['p'];
    $sql="SELECT * FROM status WHERE news_id='1' ";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
?>
 
 <div class="fix news1">
 
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
 <?php
 if($_COOKIE['id']=='1234'){
 ?>
 <?php
 }
 ?>
 <hr />
 <p class="fix news1_p"><?php echo $row['status']; ?></p>
  </div> 
  <?php

	}
  }
   else if($_GET['p']=='2'){
	   $p=$_GET['p'];
	   
    $sql="SELECT * FROM status WHERE news_id='2'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
  <?php
 if($_COOKIE['id']=='1234'){
 ?>
 
 <?php
 }
 ?>
  <?php 
 function update(){
	header('Location:home.php'); 
	 
 }
 
 ?>

 <p ><?php echo $row['status']; ?></p>
  </div>
  
  
  <?php
	}

   }
   else if($_GET['p']=='3'){
	   	   $p=$_GET['p'];

	   
    $sql="SELECT * FROM status WHERE news_id='3'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
<?php
 if($_COOKIE['id']=='1234'){
 ?>
 <?php
 }
 ?>
 <p ><?php echo $row['status']; ?></p>
  </div>
  
  
  <?php
  }
	
   }
   else if($_GET['p']=='4'){
	   	   $p=$_GET['p'];

	   
    $sql="SELECT * FROM status WHERE news_id='4'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
<?php
 if($_COOKIE['id']=='1234'){
 ?>
 <p><a href="delete_process.php?t=<?php echo $p;?>">Delete</a></p>
 <?php
 }
 ?>
 <p ><?php echo $row['status']; ?></p>
  </div>
  
  <?php
  
	}
   }
   else if($_GET['p']=='5'){
	   	   	   $p=$_GET['p'];

	   
    $sql="SELECT * FROM status WHERE news_id='5'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
<?php
 if($_COOKIE['id']=='1234'){
 ?>
 <p><a href="delete_process.php?t=<?php echo $p;?>">Delete</a></p>
 <?php
 }
 ?>
 <p ><?php echo $row['status']; ?></p>
  </div>
 
  <?php
	
   }
   }
   else if($_GET['p']=='6'){
	   
	   	   	   $p=$_GET['p'];

	   
    $sql="SELECT * FROM status WHERE news_id='6'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
<?php
 if($_COOKIE['id']=='1234'){
 ?>
 <p><a href="delete_process.php?t=<?php echo $p;?>">Delete</a></p>
 <?php
 }
 ?>
 <p ><?php echo $row['status']; ?></p>
  </div>
  
  <?php
  
	}
   }
   else if($_GET['p']=='7'){
	   	   	   $p=$_GET['p'];

	   
    $sql="SELECT * FROM status WHERE news_id='7'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
<?php
 if($_COOKIE['id']=='1234'){
 ?>
 <p><a href="delete_process.php?t=<?php echo $p;?>">Delete</a></p>
 <?php
 }
 ?>
  <p ><?php echo $row['status']; ?></p>
  </div>
 
  <?php
	}
   }
  ?>
</div>
</div>
</div>
</div>

 </body>
 </html>