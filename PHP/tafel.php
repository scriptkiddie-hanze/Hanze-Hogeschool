<?php

function tafel($n){
$uitkomst = '<table border=2 width=30%>';
	for ($col = 1 ; $col <= $n+1 ; $col++ ) { 
	$k=1;
	$uitkomst.='<tr>';
		if($col==1)
		$uitkomst.= '<td> 0 </td>';
   else{
   $k=$col-1;
   $uitkomst.= '<td>'. $k .'</td>';
   }
    for ( $row = 1; $row <= $n; $row++ ) {

            $uitkomst.= '<td>'.$k * $row.'</td>';

        }

    $uitkomst.='<tr>';

}
    
$uitkomst.='</table>';
return $uitkomst;
}

echo tafel(15);

?>