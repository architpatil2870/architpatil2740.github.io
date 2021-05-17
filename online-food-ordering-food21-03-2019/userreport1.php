
<html>
<head>
<title>delivery</title>
</head>
<form name=frm method=post action=userreport1.php>
<input type=submit name=sbm value=display>
</form>
</html>

<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
if($_POST['sbm']=="display")
{
$sql="select * from order";
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
}
?>