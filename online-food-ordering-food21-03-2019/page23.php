<?php
$v=$_POST['vt'];
$r=$_POST['rt'];
$d=$_POST['dt'];
echo "<center><table>";
echo "<tr>";
echo "<td valign=bottom><img src=pict1.bmp width=20 height=$v></td> ";
echo "<td valign=bottom><img src=pict1.bmp width=20 height=$r></td> ";
echo "<td valign=bottom><img src=pict1.bmp width=20 height=$d></td> ";
echo "</tr>";
echo "<tr>";
echo "<Td>virat</td>";
echo "<td>rohit</td>";
echo "<td>dhoni</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$v</td>";
echo "<td>$r</td>";
echo "<td>$d</td>";
echo "</tr>";
echo "</table></center>";
?>