<?php

$arr = array("Digital Society Hub", "Zernikepark 11", "9747 AN", "Groningen");

//Wat is de index van het eerste element (Digital Society Hub)? 	0
//Wat is de index van het voorlaatste element (9747 AN)?			2
//Hoeveel elementen staan er in de array? Hoe verschilt dit van de index van het laatste element?
//Er staan 4 elementen in de array en 3 index items omdat index bij 0 begint met tellen
//Wat is nu de lengte van de array?									5
//Verwijder het element met index 12 en gebruik hiervoor de functie unset()en niet null. Verklaar het verschil.
//Met unset wordt die ook echt verwijderd als je null er in zet wat overgens wel sneller is zal die terug komen met de waarde null

if (in_array("Zernikepark 11", $arr)) {
    echo $arr[2];
}
echo "<br />";
echo end($arr)."\n";

$arr[]="Nederland";
$arr[12]="Europa";

unset($arr[12]);
?>