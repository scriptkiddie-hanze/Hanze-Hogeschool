<?php 
	$tafel = 6;
	echo "<table><tr>";

	for($i=10; $i>=1; --$i){
	echo "<td> $tafel * $i = ".$tafel * $i ."</td>";
	echo "</tr> <tr>";
	}
	
	echo "</tr><table>";
?>
