<html>
<body>
<table>
<tr>
    <td bgcolor= "#CCCCC"align= "center">Distance</td>
    <td bgcolor= "#CCCCC"align= "center">Cost</td>
</tr>
<?php
/*    $distance = 50;
    while($distance <= 250){
	echo "<tr>
	    <td align=\"right\">".$distance."</td>
	    <td align=\"right\">".($distance / 10)."</td>
	    </tr>\n";
    $distance += 50;
    }
*/
    for ($distance = 50; $distance <= 250; $distance += 50){
	echo "<tr>
	    <td align=\"right\">".$distance."</td>
	    <td align=\"right\">".($distance / 10)."</td>
	    </tr>";
    }
?>
</table>
</body>
</html>
