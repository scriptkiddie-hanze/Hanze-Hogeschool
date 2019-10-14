<!doctype html>
<head></head>
<body>
	<form action="<?php echo $_SERVER["PHP_SELF"]."?antwoord=ja"?>" method ="post">
		Gebruikersnaam: <input type ="text" name="username" /><br />
		Wachtwoord: <input type ="password" name="password" /><br />
		</br>
		
		<input type = "submit" value="Stuur">
	</form>
</body>

<?php
echo "GET : ";
echo var_dump($_GET) . "<br />";
echo "POST : "; 
echo var_dump($_POST);

//1 Bij Post staat de username en wachtwoord niet in de browser
//2 Dat bij action het adres van de pagina staat
//3 Nee omdat je niet POST en GET tegelijken tijd kan gebruiken
//4 Dat het wel mogelijk is

?>