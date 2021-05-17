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
	
		</div>
		<!-- end div#logo -->
		<div id="menu">
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
                <li><a href="user.php">user</a></li>
              </ul>
		</div>
		<!-- end div#menu -->
	</div>

<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
?>

<html>
<head>
<title>About</title>
</head>
<form name=frm method=post action=about.php>
<center><table>
<caption>About</caption>
<Tr>
<td>Name:Akshay Suresh Patil</td>
</tr>
<Tr>
<Tr>
<td>Email:ap0673757@gmail.com</td>
</tr>
</tr>
<Tr>
<Tr>
<Tr>
<Tr>
<Tr>
<td>Name:Darshan Satish Khonde</td>
</tr>
</tr>
</tr>
</tr>
</tr>
<Tr>
<Tr>
<td>Email:khondedarshan11@gmail.com</td>
</tr>
</tr>
<Tr>
<Tr>
<Tr>
<Tr>
<Tr>
<td>Name:Saurabh Arun Jayswal</td>
</tr>
</tr>
</tr>
</tr>
</tr>
<Tr>
<Tr>
<td>Email:saurabhjayswal777@gmail.com</td>
</tr>
</tr>
<Tr>
<Tr>
<Tr>
<Tr>
<Tr>
<td>Name:Saleem MD. Ansari</td>
</tr>
</tr>
</tr>
</tr>
</tr>
<Tr>
<Tr>
<td>Email:saleemansari703885@gmail.com</td>
</tr>
</tr>
</center>
</form>
</html>