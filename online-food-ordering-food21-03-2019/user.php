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
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
if(empty($_POST['ui']))
{
$err1="userid must exist";
$fl=1;
}
if(empty($_POST['un']))
{
$err2="username must exist";
$fl=1;
}
if(empty($_POST['ad']))
{
$err3="address must exist";
$fl=1;
}
if(empty($_POST['mn']))
{
$err4="mobile no must exist";
$fl=1;
}
if(empty($_POST['em']))
{
$err5="emailid must exist";
$fl=1;
}
if(empty($_POST['ps']))
{
$err6="password must exist";
$fl=1;
}

}
}
?>
<html>
<head>
<title>uesr information</title>
</head>
<form name=frm method=post action=user.php>
<center><table>
<caption>USER INFORMATIOIN</caption>
<Tr>
<td>user id</td>
<td><input type=text name=ui><font color=red>* <?php echo $err1; ?></font></td>
</tr>
<Tr>
<td>user name</td>
<td><input type=text name=un><font color=red>* <?php echo $err2; ?></font></td>
</tr>
<Tr>
<td>address</td>
<td><textarea name=ad></textarea><font color=red>* <?php echo $err3; ?></font></td>
</tr>
<Tr>
<td>mob. no.</td>
<td><input type=text name=mn><font color=red>* <?php echo $err4; ?></font></td>
</tr>
<Tr>
<td>email</td>
<td><input type=text name=em><font color=red>* <?php echo $err5; ?></font></td>
</tr>
<Tr>
<td>password</td>
<td><input type=password name=ps><font color=red>* <?php echo $err6; ?></font></td>
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
$sql="insert into user values('$_POST[un]','$_POST[ad]','$_POST[mn]','$_POST[em]','$_POST[ui]','$_POST[ps]')";
mysql_query($sql,$cn);
echo "record saved";
}
}
else
if($_POST['sbm']=="update")
{
$sql="update user set username='$_POST[un]',address='$_POST[ad]',mobno='$_POST[mn]',emailid='$_POST[em]',password='$_POST[ps]' where userid='$_POST[ui]'";
mysql_query($sql,$cn);
echo "record updated";
}
else
if($_POST['sbm']=="delete")
{
$sql="delete from user where  userid='$_POST[ui]'";
mysql_query($sql,$cn);
echo "record deleted";
}
else
if($_POST['sbm']=="display")
{
$sql="select * from user";
echo "<center><table border=1>";
echo "<caption>user information</caption>";
echo "<tr>";
echo "<th>username</th>";
echo "<th>address</th>";
echo "<th>mobileno</th>";
echo "<th>emailid</th>";
echo "<th>userid</th>";
echo "<th>password</th>";
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
echo "</tr>";
}
echo "</table></center>";
}
else
if($_POST['sbm']=="search")
{
$sql="select * from user";
$result=mysql_query($sql,$cn);
echo "<center><table border=1>";
echo "<caption>user information</caption>";
echo "<tr>";
echo "<th>username</th>";
echo "<th>address</th>";
echo "<th>mobileno</th>";
echo "<th>emailid</th>";
echo "<th>userid</th>";
echo "<th>password</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
if($row[4]==$_POST['ui'])
{
echo "<Tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "</tr>";
}
}
echo "</table></center>";
}
}
?>