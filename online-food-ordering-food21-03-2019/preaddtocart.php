<?php
session_start();
$_SESSION['mi']=$_GET['mi'];
$_SESSION['ft1']=$_GET['ft'];
$_SESSION['rt']=$_GET['rt'];
$_SESSION['gst']=$_GET['gst'];
header("location:http://localhost/food/addtocart.php");
?>