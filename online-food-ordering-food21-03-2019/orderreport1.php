
<html>
<head>
<title>delivery</title>
</head>
<form name=frm method=post action=orderreport1.php>
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
$sql="select * from order";
echo "<center><table border=1>";
echo "<caption>order information</caption>";
echo "<tr>";
echo "<th>orderid</th>";
echo "<th>orderdate</th>";
echo "<th>menuid</th>";
echo "<th>quantity</th>";
echo "<th>foodtype</th>";
echo "<th>rate</th>";
echo "<th>amount</th>";
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
echo "</tr>";
}
echo "</table></center>";
}
}
?>