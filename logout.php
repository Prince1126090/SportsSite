<?php
ob_start();
session_start();

if($_COOKIE['id']){
setcookie("id", "", time() - 1000);
session_destroy();
header('Location:home.php');
}
else{
	header('Location:login.php');

}
?>