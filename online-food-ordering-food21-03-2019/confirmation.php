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
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$err8="";
$err9="";
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
$ord=$_SESSION['ordid'];
$sql="select sum(cgst),sum(sgst),sum(netamt),sum(amount) from order1 where orderid=$ord";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$gst=$row[0];
$cst=$row[1];
$netamt=$row[2];
$amt=$row[3];
echo $gst,$cst,$netamt,$amt;
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
if(empty($_POST['ct']))
{
$err2="confirm time must exist";
$fl=1;
}
if(empty($_POST['edt']))
{
$err3="expected time must exist";
$fl=1;
}
if(empty($_POST['tmt']))
{
$err4="total amount  must exist";
$fl=1;
}
if(empty($_POST['cn']))
{
$err5="customer name must exist";
$fl=1;
}
if(empty($_POST['cadr']))
{
$err6="customer adress must exist";
$fl=1;
}
if(empty($_POST['mno']))
{
$err7="mob. no. adress must exist";
$fl=1;
}
if(empty($_POST['em']))
{
$err8="email must exist";
$fl=1;
}
if(empty($_POST['pt']))
{
$err9="payment type must exist";
$fl=1;
}

}
}
?>

<html>
<head>
<title>confirmation</title>
</head>
<form name=frm method=post action=confirmation.php>
<center><table>
<caption>CONFIRMATION</caption>
</tr>
<Tr>
<td>confirm time</td>
<td><input type=text name=ct value= <?php echo date('h:m:s');?>><font color=red>* </font></td>
</tr>
<Tr>
<td>expdeltime</td>
<td><input type=text name=edt value= <?php echo date('h:m:s');?>><font color=red>* <?php echo $err3; ?></font></td>
</tr>
<Tr>
<td>total amount</td>
<td><input type=text name=tmt value=<?php echo $amt; ?>></td>
</tr>
<Tr>
<td>customer name</td>
<td><input type=text name=cnm><font color=red>* <?php echo $err5; ?></font></td>
</tr>
<Tr>
<td>customer address</td>
<td><textarea name=cadr></textarea><font color=red>* <?php echo $err6; ?></font></td>
</tr>
<Tr>
<td>mob. no.</td>
<td><input type=text name=mno><font color=red>* <?php echo $err7; ?></font></td>
</tr>
<Tr>
<td>email</td>
<td><input type=text name=em><font color=red>* <?php echo $err8; ?></font></td>
</tr>
<Tr>
<td>pay type</td>
<td><input type=text name=pt><font color=red>* <?php echo $err9; ?></font></td>
</tr>
</table>
<input type=submit name=sbm value=confirm>
</center>
</form>
</html>

<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
if($_POST['sbm']=="confirm")
{
if($fl==0)
{
$sql="insert into confirmation values('$_SESSION[ordid]','$_POST[ct]','$_POST[edt]','$_POST[tmt]','$_POST[cnm]','$_POST[cadr]','$_POST[mno]','$_POST[em]','$_POST[pt]','$cst','$gst','$netamt','N')";
mysql_query($sql,$cn);
echo "record saved";
header("location:http://localhost/food/bill.php");
}
}
$sql="select * from confirmation where orderid='$_SESSION[ordid]'";
$result=mysql_query($sql,$cn);
echo "<center><table border=1>";
echo "<caption>order information</caption>";
echo "<tr>";
echo "<th>orderid</th>";
echo "<th>confirm time</th>";
echo "<th>expdeltime</th>";
echo "<th>total amount</th>";
echo "<th>customer name</th>";
echo "<th>customer address</th>";
echo "<th>mob. no.</th>";
echo "<th>email</th>";
echo "<th>pay type</th>";
echo "<th>cgst</th>";
echo "<th>sgst</th>";
echo "<th>netamt</th>";
echo "<th>status</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
if($row[0]==$_SESSION['ordid'])
{
echo "<Tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "<td>$row[11]</td>";
echo "<td>$row[12]</td>";
echo "</tr>";
}
}
echo "</table></center>";
}
?>