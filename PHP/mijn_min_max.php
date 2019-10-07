<?php

$getallenRij = array(9,1,2,7,7,3,0,7,15,1);

function my_min ($getallenRij){			//Functie kan opgeroepen worden door my_min
$aantal =count($getallenRij);			//Aantal is gelijk aan de hoeveel values er in de array zitten
$indexVanKleinsteWaarde = 0;			//Index is 0 omdat een array altijd met 0 begint
$my_min = $getallenRij[0];				//Kleinste getal is de eerste value uit de array
for ($i = 0; $i < $aantal; $i ++){		//Om de loop te laten stoppen op het einde van de array wordt $i met de aantal vergeleken waarbij de aantal groter moet zijn.
	$getal = $getallenRij[$i];			//Getal is $i zodat deze de hele array afloopt
	if ($getal < $my_min){				//Of het getal kleiner is dan my_min
		$my_min = $getal;				//my_min neem dan het getal over
		$indexVanKleinsteWaarde = $i;	//index is dan de huidige $i
		}	
	}
	return array($my_min, $indexVanKleinsteWaarde);	//Omdat return maar 1 value kan terug geven is het in een array gedaan
}

function my_max ($getallenRij){
$aantal =count($getallenRij);
$indexVanGrootsteWaarde = 0;
$my_max = $getallenRij[0];
for ($i = 0; $i < $aantal; $i ++){
	$getal = $getallenRij[$i];
	if ($getal > $my_max){
		$my_max = $getal;
		$indexVanGrootsteWaarde = $i;	
		}	
	}
	return array($my_max, $indexVanGrootsteWaarde);	
}
$min_resultaat_array = my_min($getallenRij);
echo "De kleinste waarde is: ", $min_resultaat_array[0];
echo " met de index van: ", $min_resultaat_array[1];

echo "<br />";

$max_resultaat_array = my_max($getallenRij);
echo "De kleinste waarde is: ", $max_resultaat_array[0];
echo " met de index van: ", $max_resultaat_array[1];

echo "<br />";
echo "<br />";

$aantal =count($getallenRij);
$indexVanKleinsteWaarde = $getallenRij[0];

for ($i = 0; $i < $aantal; $i ++){
echo "Index: " . $i .": " . $getallenRij[$i] . "<br />";
}
?>




<?php
/*
 function for_my_min($getallenrij){
	$aantal = count($getallenrij);
	$indexVanKleinsteWaarde = 0;
	$my_min = $getallenrij[0];
	 for ($i = 0 ; $i < $aantal ; $i++){
		$getal = $getallenrij[$i];
		 if $getal < $my_min {
			 $my_min = $getal;
			 $indexVanKleinsteWaarde = $i;
		 }
	 }
	return $my_min;
 }
 
 echo "test", for_my_min($getallenrij);
*/
?>