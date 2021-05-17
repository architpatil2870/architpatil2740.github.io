<?php
session_start();
echo $_POST['ft'];
$_SESSION['ft']=$_POST['ft'];
header("location:http://localhost/food/order2.php");
?>