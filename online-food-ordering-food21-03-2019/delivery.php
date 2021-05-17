<html>
<head>
<title>delivery</title>
</head>
<form name=frm method=post action=delivery1.php>
<center><table>
<caption>DELIVERY</caption>
<Tr>
<td>order id</td>
<td>
<select name=oi>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
$sql="select * from confirmation where status='N'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<option value=$row[0]>$row[4]</option>";
}
?>
</select>
</td>
</tr>
</table>
<input type=submit name=sbm value=next>
</center>
</form>
</html>

