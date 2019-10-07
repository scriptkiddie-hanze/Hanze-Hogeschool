<?php

function faculteit($n){
	$getal = 1;
	for($i = $n ; $i > 0 ; $i--){
		$getal = $getal*$i;
	}
	return $getal;
}

echo faculteit(5)

?>