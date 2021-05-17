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
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
if(empty($_POST['dn']))
{
$err1="deliveryno must exist";
$fl=1;
}
if(empty($_POST['dt']))
{
$err2="delivery time must exist";
$fl=1;
}
if(empty($_POST['oi']))
{
$err3="order id must exist";
$fl=1;
}
if(empty($_POST['cnm']))
{
$err4="customer name must exist";
$fl=1;
}
if(empty($_POST['namt']))
{
$err5="net amount must exist";
$fl=1;
}

}
}
?>

<html>
<head>
<title>delivery</title>
</head>
<form name=frm method=post action=delivery.php>
<center><table>
<caption>DELIVERY</caption>
<Tr>
<td>delivery no</td>
<td><input type=text name=dn value=<?php echo $err1; ?> ></td>
</tr>
<Tr>
<td>delivery time</td>
<td><input type=text name=dt value= <?php echo date('h:m:s');?>><font color=red>* <?php echo $err2; ?></font></td>
</tr>
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
echo "<option value=$row[0]>$row[0]</option>";
}
?>
</select>
</td>
</tr>
<Tr>
<td>customer name</td>
<td><input type=text name=cnm><font color=red>* <?php echo $err4; ?></font></td>
</tr>
<Tr>
<td>net amount</td>
<td><input type=text name=namt><font color=red>* <?php echo $err5; ?></font></td>
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
$sql="insert into delivery values('$_POST[dn]','$_POST[dt]','$_POST[oi]','$_POST[cnm]','$_POST[namt]')";
mysql_query($sql,$cn);
$sql="update confirmation set status='Y' where orderid='$_POST[oi]'";
mysql_query($sql,$cn);
echo "record saved";
}
}
else
if($_POST['sbm']=="update")
{
$sql="update delivery set delivery time='$_POST[dt]',order id='$_POST[oi]',customer name='$_POST[cnm]',net amount='$_POST[namt]' where delivery no='$_POST[dn]'";
mysql_query($sql,$cn);
echo "record updated";
}
else
if($_POST['sbm']=="delete")
{
$sql="delete from user where  delivery no='$_POST[dn]'";
mysql_query($sql,$cn);
echo "record deleted";
}
else
if($_POST['sbm']=="display")
{
$sql="select * from delivery";
echo "<center><table border=1>";
echo "<caption>user information</caption>";
echo "<tr>";
echo "<th>delivery no</th>";
echo "<th>delivery time</th>";
echo "<th>order id</th>";
echo "<th>customer name</th>";
echo "<th>net amount</th>";
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
echo "</tr>";
}
echo "</table></center>";
}
else
if($_POST['sbm']=="search")
{
$sql="select * from delivery";
$result=mysql_query($sql,$cn);
echo "<center><table border=1>";
echo "<caption>user information</caption>";
echo "<tr>";
echo "<th>delivery no</th>";
echo "<th>delivery time</th>";
echo "<th>order id</th>";
echo "<th>customer name</th>";
echo "<th>net amount</th>";
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
echo "</tr>";
}
}
echo "</table></center>";
}
}
?>