<?php
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
$sql="delete from  order1  where orderdate='$_SESSION[od]' AND menuid='$_SESSION[mi]' AND foodtype='$_SESSION[ft]' AND rate='$_SESSION[rt] AND orderid='$_SESSION[oi]'";
mysql_query($sql,$cn);
header("location:http://localhost/food/modifyorder.php");
?>