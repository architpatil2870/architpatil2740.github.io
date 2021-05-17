<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Clean Type
Version    : 1.0
Released   : 20100104
Description: A two-column fixed-width template suitable for small websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Clean Type by Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Foodie</a></h1>
			<h2>&nbsp;</h2>
	  </div>
		<!-- end div#logo -->
		<div id="menu">
			<ul>
				<li class="active"><a href="home1.html">Home</a></li>
				<li><a href="order1.php">order</a></li>
				<li><a href="about1.html">About</a></li>
				<li><a href="contact1.html">Contact</a></li>
               
              </ul>
		</div>
		<!-- end div#menu -->
	</div>
	<!-- end div#header -->
<form name=frm method=post action=addtocart.php>
<center><table>
<caption>add to cart</caption>
<Tr>
<td>Quantity</td>
<td><input type=text name=qt></td>
</tr>
</table>
<input type=submit name=sbm value=back_to_select>
<input type=submit name=sbm value=add>
<input type=submit name=sbm value=confirm>
</center>
</form>
</html>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
session_start();
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="add")
{
$amt=$_POST['qt']*$_SESSION['rt'];
$gam=$amt*$_SESSION['gst']/100;
$namt=$amt+$gam+$gam;
$dt=date("Y-m-d");
$id=$_SESSION['ordid'];
echo $id,$dt,$amt,$gam,$namt;
$sql="insert into order1 values('$_SESSION[ordid]','$dt','$_SESSION[mi]','$_POST[qt]','$_SESSION[ft1]','$_SESSION[rt]','$amt','$gam','$gam','$namt')";
mysql_query($sql);
header("location:http://localhost/food/order2.php");
}
else
if($_POST['sbm']=="back_to_select")
header("location:http://localhost/food/order2.php");
else
header("location:http://localhost/food/confirmation.php");
}
?>