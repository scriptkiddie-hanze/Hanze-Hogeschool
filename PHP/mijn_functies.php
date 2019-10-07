<?php

function sayBigHello(){
	$tekst = "<h1>" . 'HALLO!' . "</h1><br/>";
	return $tekst;
}

function toonTekst($n){
	$tekst = $n . "<br/>";
	return $tekst;
}

function telOp($i, $n){
	$som = $i + $n;
	$tekst = "De som van deze twee getallen is: " . $som . "<br/>";
	return $tekst;
}

echo sayBigHello();
echo toonTekst("Welkom op mijn webpagina");
echo toonTekst("Dit is een regel");
echo telOp(5, 5);

?>
