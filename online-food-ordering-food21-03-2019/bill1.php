<html>
<head>
<script laguage=javascript>
function disp()
{
window.print();
}
</script>
</head>
<body onload=disp()>
<?php
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
$sql1="select orderdate from order1 where orderid='$_SESSION[ordid]'";
$result1=mysql_query($sql1,$cn);
$row1=mysql_fetch_array($result1);
$dt=$row1[0];
$sql="select * from confirmation where orderid='$_SESSION[ordid]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
echo "<center><h1><font color=red>Food Ordering System</font></h1>";
echo "<h5>Vidya Nagari, Deopur, Dhule - 424005</h5></center>";
echo "<center><table>";
echo "<tr><td><b>orderid:</b></td><td>$row[1]</td><td>   </td><td><b>orderdate:</td><td>$dt</td></tr>";
echo "<tr><td><b>name:</b></td><td>$row[4]</td><td>   </td><td><b>address:</b></td><td>$row[5]</td></tr>";
echo "<tr><td><b>contno:</b></td><td>$row[6]</td><td>   </td><td><b>deltype:</b></td><td>$row[7]</td></tr>";
echo "<tr><td>   </td><td>   </td><td>   </td><td><b>totalamount:</b></td><td>$row[10]</td></tr>";
echo "<tr></tr>";
echo "</table></center>";
//// order information
$sql="select order1.menuid,menu.description,order1.foodtype,order1.quantity,order1.rate,order1.amount,order1.cgst,order1.sgst,order1.netamt from order1,menu where menu.menuid=order1.menuid and order1.orderid='$_SESSION[ordid]'";
$result=mysql_query($sql,$cn);
echo "<center><table border=1>";
echo "<tr>";
echo "<th>foodid</th>";
echo "<th>description</th>";
echo "<th>type</th>";
echo "<th>quantity</th>";
echo "<th>rate</th>";
echo "<th>amount</th>";
echo "<th>cgst</th>";
echo "<th>sgst</th>";
echo "<th>netamt</th>";

echo "</tr>";
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
echo "</table> <br><br><br><br>Thank you very much !!!<br> Visit Again<br></center>";
////
}
echo "</table> <br><br><br><br>Thank you very much !!!<br> Visit Again<br></center>";
////
?>
</body>
</html>