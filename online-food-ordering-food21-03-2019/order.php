<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
if(empty($_POST['oi']))
{
$err1="orderid must exist";
$fl=1;
}
if(empty($_POST['od']))
{
$err2="order date must exist";
$fl=1;
}
if(empty($_POST['mi']))
{
$err3="menuid must exist";
$fl=1;
}
if(empty($_POST['qty']))
{
$err4="quantity must exist";
$fl=1;
}
if(empty($_POST['ft']))
{
$err5="food type must exist";
$fl=1;
}
if(empty($_POST['rt']))
{
$err6="rate must exist";
$fl=1;
}
if(empty($_POST['amt']))
{
$err7="amount must exist";
$fl=1;
}

}
}
?>

<html>
<head>
<title>order</title>
</head>
<form name=frm method=post action=order.php>
<center><table>
<caption>Order</caption>
<Tr>
<td>orderid</td>
<td><input type=text name=oi><font color=red>* <?php echo $err1; ?></font></td>
</tr>
<Tr>
<td>order date</td>
<td><input type=text name=od><font color=red>* <?php echo $err2; ?></font></td>
</tr>
<Tr>
<td>menuid</td>
<td>
<select name=mi>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
$sql="select * from menu";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<option value=$row[0]>$row[0]</option>";
}
?>
</select>
</td>
</tr>
<Tr>
<td>quantity</td>
<td><input type=text name=qty><font color=red>* <?php echo $err4; ?></font></td>
</tr>
<Tr>
<td>food type</td>
<td><input type=text name=ft><font color=red>* <?php echo $err5; ?></font></td>
</tr>
<Tr>
<td>rate</td>
<td><input type=text name=rt><font color=red>* <?php echo $err6; ?></font></td>
</tr>
<Tr>
<td>amount</td>
<td><input type=text name=amt><font color=red>* <?php echo $err7; ?></font></td>
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
$sql="insert into order1 values('$_POST[oi]','$_POST[od]','$_POST[mi]','$_POST[qty]','$_POST[ft]','$_POST[rt]','$_POST[amt]')";
mysql_query($sql,$cn);
echo "record saved";
}
}
else
if($_POST['sbm']=="update")
{
$sql="update order1 set orderdate='$_POST[od]',menuid='$_POST[mi]',quantity='$_POST[qty]',foodtype='$_POST[ft]',rate='$_POST[rt],'amount='$_POST[amt]' where orderid='$_POST[oi]'";
mysql_query($sql,$cn);
echo "record updated";
}
else
if($_POST['sbm']=="delete")
{
$sql="delete from order1 where  menuid='$_POST[mi]'";
mysql_query($sql,$cn);
echo "record deleted";
}
else
if($_POST['sbm']=="display")
{
$sql="select * from order1";
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
else
if($_POST['sbm']=="search")
{
$sql="select * from order1";
$result=mysql_query($sql,$cn);
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
while($row=mysql_fetch_array($result))
{
if($row[2]==$_POST['mi'])
{
echo "<Tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "</tr>";
}
}
echo "</table></center>";
}
}
?>