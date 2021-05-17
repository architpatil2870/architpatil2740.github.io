<?php
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
$sql="select count(*) from order1";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select max(orderid) from order1";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$_SESSION['ordid']=$row[0]+1;
} 
else
$_SESSION['ordid']=1;
echo $_SESSION['ordid'];
header("location:http://localhost/food/order2.php");
?>
