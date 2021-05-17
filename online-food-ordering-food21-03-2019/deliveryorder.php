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
				<li class="active"><a href="contact.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
                <li><a href="user.php">user</a></li>
              </ul>
		</div>
		<!-- end div#menu -->
	</div>

<head>
<title>delivery</title>
</head>
<form name=frm method=post action=deliveryorder.php>
<center><input type=submit name=sbm value=display></center>
</form>
</html>

<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
if($_POST['sbm']=="display")
{
$sql="select * from delivery";
echo "<center><table border=1>";
echo "<caption>delivery information</caption>";
echo "<tr>";
echo "<th>delivery no</th>";
echo "<th>delivery time</th>";
echo "<th>order id</th>";
echo "<th>customer name</th>";
echo "<th>net amount</th>";
echo "</tr>";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>