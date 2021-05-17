<?php
$r=$_POST['rn'];
$n=$_POST['nm'];
$m=$_POST['mr'];
$h=$_POST['hn'];
$e=$_POST['en'];
$t=$m+$h+$e;
$p=$t/100*300;
if($p<40)
$rm="fail";
else
if($p<50)
$rm="pass class";
else
if($p<60)
$rm="second";
else
if($p<70)
$rm="first";
else
$rm="distinction";
echo "<table border=2>";
echo "<Tr>";
echo "<td>rollno</td>";
echo "<td>$r<td>";
echo "</tr>";
echo "<Tr>";
echo "<td>name</td>";
echo "<td>$n<td>";
echo "</tr>";
echo "<Tr>";
echo "<td>marathi</td>";
echo "<td>$m<td>";
echo "</tr>";
echo "<Tr>";
echo "<td>hindi</td>";
echo "<td>$h<td>";
echo "</tr>";

echo "<Tr>";
echo "<td>english</td>";
echo "<td>$e<td>";
echo "</tr>";
echo "<Tr>";
echo "<td>total</td>";
echo "<td>$t<td>";
echo "</tr>";
echo "<Tr>";
echo "<td>percent</td>";
echo "<td>$p<td>";
echo "</tr>";
echo "<Tr>";
echo "<td>remark</td>";
echo "<td>$rm<td>";
echo "</tr>";
echo "</table>";
?>