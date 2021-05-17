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
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$fl=0;
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
$sql="select count(*) from delivery";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
$dn=$row[0]+1;
else
$dn=1;
$sql="select * from confirmation where orderid='$_POST[oi]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$cn=$row[4];
$namt=$row[11];
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
if(empty($_POST['cnm']))
{
$err4="customer name must exist";
$fl=1;
}
}
}
?>

<html>
<head>
<title>delivery</title>
</head>
<form name=frm method=post action=delivery1.php>
<center><table>
<caption>DELIVERY</caption>
<Tr>
<td>orderid</td>
<td><input type=text name=oi value=<?php echo $_POST['oi']; ?> ></td>
</tr>
<Tr>
<td>delivery no</td>
<td><input type=text name=dn value=<?php echo $dn; ?> ></td>
</tr>
<Tr>
<td>delivery time</td>
<td><input type=text name=dt value= <?php echo date('h:m:s');?>><font color=red>* <?php echo $err2; ?></font></td>
</tr>
<Tr>
<td>customer name</td>
<td><input type=text name=cnm value=<?php echo $cn; ?>></td>
</tr>
<Tr>
<td>net amount</td>
<td><input type=text name=namt value=<?php echo $namt; ?> ></td>
</tr>
</table>
<input type=submit name=sbm value=submit>
</center>
</form>
</html>

<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
if($_POST['sbm']=="submit")
{
if($fl==0)
{
$sql="insert into delivery values('$_POST[dn]','$_POST[dt]','$_POST[oi]','$_POST[cnm]','$_POST[namt]')";
mysql_query($sql,$cn);
$sql="update confirmation set status='Y' where orderid='$_POST[oi]'";
mysql_query($sql,$cn);
echo "record saved";
}
}
}
?>