<?php

	$temp=array(22,24,25,22,21,20,18,22,23,25,24,22,21,19,18,16,17,18,22,23,26,27,23,22,20,18,18,19,20,22,24);
	sort($temp);
	
	$temphigh = $temp;
	rsort($temphigh);
	
	$gemiddelde = array_sum($temp)/count($temp);
	$gemiddeldeafgerond = number_format($gemiddelde, 1);
	
	echo "De gemiddelde temperatuur deze maand was : {$gemiddeldeafgerond} <br />";
	echo "De laagste drie temperaturen deze maand waren : {$temp[0]}, {$temp[1]}, {$temp[2]} <br />";
	echo "De hoogste drie temperaturen deze maan waren : {$temphigh[0]}, {$temphigh[1]}, {$temphigh[2]} <br />";
	
?>