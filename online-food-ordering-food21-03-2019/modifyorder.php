<html>
<body>
<form name=frm method=post action=confirmation.php>
<?php
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
$sql="select * from order1 where orderid='$_SESSION[ordid]'";
echo "<center><table border=1>";
echo "<caption>confirmation information</caption>";
echo "<tr>";
echo "<th>orderid</th>";
echo "<th>order date</th>";
echo "<th>menu id</th>";
echo "<th>qty</th>";
echo "<th>food type</th>";
echo "<th>rate</th>";
echo "<th>amount</th>";
echo "<th>modify</th>";
echo "<th>delete</th>";
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
echo "<td><a href=uporder.php?oi=$row[o]&od=$row[1]&mi=row[2]&qt=row[3]&ft=row[4]&rt=row[5]>update</a></td>";
echo "<td><a href=delorder.php?oi=$row[o]&od=$row[1]&mi=row[2]&qt=row[3]&ft=row[4]&rt=row[5]>delete</a></td>";
echo "</tr>";
}
echo "</table></center>";
?>
<input type=submit name=sbm value=next>
</form>
</body>
</html>