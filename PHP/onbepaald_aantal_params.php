<?php

function berekenGemiddelde() {
  $aantal = func_num_args();
  $som = 0;
  
  foreach(func_get_args() as $arg) {
	  if(is_int($arg)){
		  $som += $arg;
	  }else{
		  die('Gebruik alleen nummers');
	  }
	$uitkomst = $som / $aantal;
  }
  return $uitkomst;
}

$resultaat = berekenGemiddelde(4,5,8,2,3,1,5,8);
echo "De uitkomst van de opgegeven aantal getallen is: " . $resultaat;
?>