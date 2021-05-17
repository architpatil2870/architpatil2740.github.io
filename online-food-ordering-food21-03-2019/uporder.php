<?php
session_start();
$q=$_SESSION['qt'];
?>
<html>
<head>
<title>add to cart</title>
</head>
<form name=frm method=post action=uporder.php>
<center><table>
<caption>add to cart</caption>
<Tr>
<td>Quantity</td>
<td><input type=text name=qt value=<?php echo $q; ?>></td>
</tr>
</table>
<input type=submit name=sbm value=update>
</center>
</form>
</html>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
if(isset($_POST['sbm']))
{
$sql="update order1 set quantity='$_POST[qt]' where orderdate='$_SESSION[od]' AND menuid='$_SESSION[mi]' AND foodtype='$_SESSION[ft]' AND rate='$_SESSION[rt] AND orderid='$_SESSION[oi]'";
mysql_query($sql,$cn);
header("location:http://localhost/food/modifyorder.php");
}
?>