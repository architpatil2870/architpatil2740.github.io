<?php
session_start();
$_SESSION['oi']=$_GET['oi'];
$_SESSION['od']=$_GET['od'];
$_SESSION['mi']=$_GET['mi'];
$_SESSION['ft']=$_GET['ft'];
$_SESSION['rt']=$_GET['rt'];
$_SESSION['qt']=$_GET['qt'];

header("location:http://localhost/food/uporder.php");
?>