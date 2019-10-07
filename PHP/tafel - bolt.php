<?php

function tafel($n){
$uitkomst = '<table border=2 width=30%>';
	for ($col = 1 ; $col <= $n ; $col++ ) { 
	$k=1;
	$uitkomst.='<tr>';
		if($col==1){
			for ($i = 0 ; $i <= $n ; $i++)
			$uitkomst.= '<th>'. $i .'</th>';
				if($i>$n){
				$i++;
				$uitkomst.='<tr>';
				$uitkomst.= '<th>'. $k .'</th>';
				}	
		}else{
		$k=$col;
		$uitkomst.= '<th>'. $k .'</th>';
		}
    for ( $row = 1; $row <= $n; $row++ ) {

            $uitkomst.= '<td>'.$col * $row.'</td>';

        }

    $uitkomst.='<tr>';

}
    
$uitkomst.='</table>';
return $uitkomst;
}

echo tafel(15);

?>