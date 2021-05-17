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
				<li class="active"><a href="home.html">Home</a></li>
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
$err6="";
$err7="";
$err8="";
$err9="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
if(empty($_POST['mi']))
{
$err1="menuid must exist";
$fl=1;
}
if(empty($_POST['t1']))
{
$err2="type1 must exist";
$fl=1;
}
if(empty($_POST['st']))
{
$err3="subtype must exist";
$fl=1;
}
if(empty($_POST['t2']))
{
$err4="type2 must exist";
$fl=1;
}
if(empty($_POST['desp']))
{
$err5="description must exist";
$fl=1;
}
if(empty($_POST['rt']))
{
$err6="rate must exist";
$fl=1;
}
if(empty($_POST['ft']))
{
$err7="foodtype must exist";
$fl=1;
}
if(empty($_POST['gr']))
{
$err8="GST Rate must exist";
$fl=1;
}
if(empty($_POST['img1']))
{
$err9="images must exist";
$fl=1;
}
}
}
?>
<form name=frm method=post action=menu.php>
<center><table>
<caption>MENU</caption>
<Tr>
<td align=left>menuid</td>
<td align=left><input type=text name=mi><font color=red>* <?php echo $err1; ?></font></td>
</tr>
<Tr>
<td align=left>type1</td>
<td align=left><input type=text name=t1><font color=red>* <?php echo $err2; ?></font></td>
</tr>
<Tr>
<td align=left>subtype</td>
<td align=left><input type=text name=st><font color=red>* <?php echo $err3; ?></font></td>
</tr>
<Tr>
<td align=left>type2</td>
<td align=left><input type=text name=t2><font color=red>* <?php echo $err4; ?></font></td>
</tr>
<Tr>
<td align=left>description</td>
<td align=left><textarea name=desp></textarea><font color=red>* <?php echo $err5; ?></font></td>
</tr>
<Tr>
<td align=left>rate</td>
<td align=left><input type=text name=rt><font color=red>* <?php echo $err6; ?></font></td>
</tr>
<Tr>
<td align=left>food type</td>
<td align=left><input type=text name=ft><font color=red>* <?php echo $err7; ?></font></td>
</tr>
<Tr>
<td align=left>GST Rate</td>
<td align=left><input type=text name=gr><font color=red>* <?php echo $err8; ?></font></td>
</tr>
<Tr>
<td align=left>images</td>
<td align=left><input type=file name=img1><font color=red>* <?php echo $err9; ?></font></td>
</tr>
</table>
<input type=submit name=sbm value=submit>
<input type=submit name=sbm value=update>
<input type=submit name=sbm value=delete>
<input type=submit name=sbm value=display>
<input type=submit name=sbm value=search>
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
$im="'$_POST[img1]'";
echo $im;
$sql="insert into menu values('$_POST[mi]','$_POST[t1]','$_POST[st]','$_POST[t2]','$_POST[desp]','$_POST[rt]','$_POST[ft]','$_POST[gr]',$im)";
mysql_query($sql,$cn);
echo "record saved";
}
}
else
if($_POST['sbm']=="update")
{
$sql="update menu set type1='$_POST[t1]',subtype='$_POST[st]',type2='$_POST[t2]',description='$_POST[desp]',rate='$_POST[rt]',foodtype='$_POST[ft]',GST Rate='$_POST[gr]',images='$_POST[img1]' where menuid='$_POST[mi]'";
mysql_query($sql,$cn);
echo "record updated";
}
else
if($_POST['sbm']=="delete")
{
$sql="delete from menu where  menuid='$_POST[mi]'";
mysql_query($sql,$cn);
echo "record deleted";
}
else
if($_POST['sbm']=="display")
{
$sql="select * from menu";
echo "<center><table border=1>";
echo "<caption>menu information</caption>";
echo "<tr>";
echo "<th>menuid</th>";
echo "<th>type1</th>";
echo "<th>subtype</th>";
echo "<th>type2</th>";
echo "<th>description</th>";
echo "<th>rate</th>";
echo "<th>foodtype</th>";
echo "<th>GST Rate</th>";
echo "<th>images</th>";
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
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($_POST['sbm']=="search")
{
$sql="select * from menu";
$result=mysql_query($sql,$cn);
echo "<center><table border=1>";
echo "<caption>menu information</caption>";
echo "<tr>";
echo "<th>menuid</th>";
echo "<th>type1</th>";
echo "<th>subtype</th>";
echo "<th>type2</th>";
echo "<th>description</th>";
echo "<th>rate</th>";
echo "<th>foodtype</th>";
echo "<th>GST Rate</th>";
echo "<th>images</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
if($row[0]==$_POST['mi'])
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
echo "</tr>";
}
}
echo "</table></center>";
}
}
?>