<?php
function factorial($n){
		if ($n == 0) { return 1; };
		
		return $n * factorial($n-1);
}
	
	$getal = 6;
	
	echo "De faculteit van $getal is " . factorial($getal);
	
	echo "<br />";
	echo "<br />";

function Fibonacci($n){ 
  
    $num1 = 0; 
    $num2 = 1; 
	$uitkomst = "Uitkomst van fibonacci " . $n . " is:";
    $counter = 0; 
    while ($counter <= $n){ 
        $uitkomst .= ' '.$num1; 
        $temp = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $temp; 
        $counter++; 
    } 
	return $uitkomst;
} 
  
echo Fibonacci(10); 
?> 