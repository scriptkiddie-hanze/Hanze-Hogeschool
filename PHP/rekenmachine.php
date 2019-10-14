<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
Eerste getal: <input type="text" id="eerste" name="eerste"></p>
Tweede getal: <input type="text" id="tweede" name="tweede"></p>
<input type="radio" name="reken" id="plus" value="plus" checked>Optellen(+)
<input type="radio" name="reken" id="min" value="min">Aftrekken(-)
<input type="radio" name="reken" id="keers" value="keer">Vermenigvuldigen(*)
<input type="radio" name="reken" id="delen" value="delen">Delen(/)
<input type="radio" name="reken" id="faculiteit" value="faculiteit">Faculiteit
<p></p>
<button type="submit" name="submit" value="submit">Berekenen</button>
<button type="reset" value="reset">Velden leegmaken</button>
</form>

<?php

if(isset($_POST['submit'])){
	$eerste = $_POST['eerste'];
	$tweede= $_POST['tweede'];
	$operator = $_POST["reken"];
	
	if(ctype_alpha($eerste) && ctype_alpha($tweede)){
		
		switch($operator){
			case "plus":
				echo $eerste + $tweede;
				break; 
			case "min":
				echo $eerste - $tweede;
				break;
			case "keer":
				echo $eerste * $tweede;
				break; 
			case "delen":
				if($tweede == 0){
					echo "Delen door 0 is niet mogelijk";
				}else{
					echo $eerste / $tweede;}
				break;
			case "faculiteit":
				$getal = 1;
				for($i = $eerste ; $i > 0 ; $i--){
					$getal =* &i;
				}
				echo $getal;
				break;
		}
	}
	else{
		echo "Gebruik alleen nummers!";
	}
}

?>
