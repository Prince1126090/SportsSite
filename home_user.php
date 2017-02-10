<?php
session_start();
include 'database.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" href="css/home_user.css"/>
<title>home of sports zone</title>
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
  <li><a href="#">LIVE SCORES</a></li>
  <li><a href="#">NEWS</a></li>
  <li><a href="#">PHOTOS</a></li>
  <li><a href="register.php">REGISTRATION</a></li>
  <li><a href="admin_page.php">ADMIN</a></li>
  <li><a href="logout.php">LOGOUT</a></li>
  <?php
   } else{
   ?>
   <li><a href="home.php">HOME</a></li>
   <li><a href="#">LIVE SCORES</a></li>
   <li><a href="#">NEWS</a></li>
   <li><a href="#">PHOTOS</a></li>
   <li><a href="register.php">REGISTRATION</a></li>
   <li><a href="logout.php">LOGOUT</a></li>
   <?php
   }
   }else
  {
   ?>
   <li><a href="home.php">HOME</a></li>
  <li><a href="#">LIVE SCORES</a></li>
  <li><a href="#">NEWS</a></li>
  <li><a href="#">PHOTOS</a></li>
  <li><a href="register.php">REGISTRATION</a></li>
  <li><a href="login.php">LOGIN</a></li>
   <?php
  }
   ?>

 
</ul>
</div>

<div class="live_score">
 <h1>live score is here</h1>
</div>

<div class="content">

<div class="fix sidebar">
<ul >
  <li><a href="home.php">HOME</a></li>
  <li><a href="fixtures.php">FIXTURES</a></li>
  <li><a href="#">HISTORY</a></li>
  <li><a href="#">VIDEOS</a></li>
  <li><a href="#">REGISTER</a></li>
  <li><a href="#">ABOUT</a></li>
</ul>
</div>

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
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 
 <div class="news1_text">
 <a href="read_more.php?p=<?php echo "0";?>" class="hyper_text"><h1 class="news1_h1"><?php echo $row['heading']; ?></h1></a>
 <p id="news1_writer">writer:shuvro</p>
 <p ><?php echo $row['shortcut_status']; ?></p>
  </div>
 </div>
 
 <?php
	}
	
    for($i=1;$i<=$n;$i++){
	
	$sql="SELECT * FROM status WHERE news_id='$showing_id[$i]'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 
  <div class="fix news2">
  <img src="<?php echo $row['image'] ?>" alt="text"/>
  <div class="news1_text">
  <a href="read_more.php?p=<?php echo $i; ?>" class="hyper_text"><h1 class="news1_h1"><?php echo $row['heading']; ?></h1></a>
  <p id="news1_writer">writer:shuvro</p>
  <p ><?php echo $row['shortcut_status']?></p>
  </div>
 </div>
<?php
	}
	}
	
	
 ?>
 
  
 
</div>
</div>
</div>

<div class="fix footer">
 <p class="fix footer_text1 ">Mahamudul Hasan Shuvro</p>
 <p class="fix footer_text2">CSE 2K12</p>
 <p class="fix footer_text3">Project 2-2</p>
</div>



</body>
</html>
