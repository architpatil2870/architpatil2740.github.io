<?php
echo "<center><table border=1 width=50%>";
for($a=1;$a<=10;$a++)
{
echo "<tr>";
for($b=1;$b<=10;$b++)
{
$c=$a*$b;
echo "<td align=right>$c</td>";
}
echo "</tr>";
}
echo "</table></center>";
?>