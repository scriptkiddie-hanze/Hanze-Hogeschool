<?php

if(isset($_GET['fruit'])){
	$fruit = $_GET['fruit'];
}

switch ($fruit){
	case "appel":
		echo $fruit . " is lekker zeg";
		break;
	case "banaan":
		echo $fruit . " is vies!";
		break;
	case "kiwi":
		echo $fruit . " is lekker zeg";
		break;
	case "citroen":
		echo $fruit . " is lekker zeg";
		break;
	case "peer":
		echo $fruit . " is lekker zeg";
		break;
}
?>
<br />
<br />
<form action="fruit_kiezen.php">
    <input type="submit" value="Verander je keuze" />
</form>