<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("food",$cn);
$sql="select * from user";
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
echo row[0];
echo "<td>'row[1]'</td>";
echo "<td>'row[2]'</td>";
echo "<td>'row[3]'</td>";
echo "<td>'row[4]'</td>";
echo "<td>'row[5]'</td>";
echo "</tr>";
}
echo "</table></center>";
?>