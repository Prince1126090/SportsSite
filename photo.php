 <?php 
 include 'database.php';
 
 ?>
 
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" href="css/home_user.css"/>
<title>PHOTO</title>
</head>

<body>


<div class="fix main">

<div class="fix header">
<h1>ONLY SPORTS</h1>
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

<?php
    $sql="SELECT * FROM status";
	$res=mysql_query($sql);
	$n=0;
	while($row=mysql_fetch_array($res)){
		$showing_id[$i]=$row['news_id'];
			$n=$i++;
	}
	sort($showing_id);
	$first=$showing_id[0];
	$sql="SELECT * FROM status WHERE news_id='$first'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
?>
 
 <div class="fix news1">
 <img " id="n1" src="<?php echo $row['image'];?>" alt="" />
 </div>
 <?php
	}
	
    for($i=1;$i<=$n;$i++){
	
	$sql="SELECT * FROM status WHERE news_id='$showing_id[$i]'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 
  <div class="fix news1">
  <img id="n1" src="<?php echo $row['image'] ?>" alt="text"/>
 </div>
<?php
	}
	}
 ?>
 
</div>


</div>
</div>
</div>

<div class="fix footer">
 <p class="fix footer_text1 ">PRINCE CSE 2K12</p>
</div>
</body>
</html>
