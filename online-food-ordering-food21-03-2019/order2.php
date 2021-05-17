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
			<h2><a href="http://www.freecsstemplates.org/"></a></h2>
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

<?php
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
$sql="select * from menu order by type1";
$result=mysql_query($sql);
echo "<table>";
echo "<tr>";
$c=1;
while($row=mysql_fetch_array($result))
{
echo "<td><a href=preaddtocart.php?mi=$row[0]&ft=$row[1]&rt=$row[5]&gst=$row[7]><img src=$row[8] height=100 width=100 border=1><br>$row[2]<br>$row[4]<br>$row[5] Rs.</a></td>";
$c=$c+1;
if($c>4)
{
$c=1;
echo "</tr>";
echo "<tr>";
}
}
?>
<html>
<body>
<form name=frm method=post action=confirmation.php>
<center>
<input type=submit name=sbm11 value=confirm>
</center>
</form>
</body>
</html>