<?php
echo "Naam: " . htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8') . "<br />"; 
echo "Leeftijd: " . htmlspecialchars($_GET['age'], ENT_QUOTES, 'UTF-8') . "<br />"; 
echo "Locatie: " . htmlspecialchars($_GET['location'], ENT_QUOTES, 'UTF-8') . "<br />"; 
echo "<br />";
echo "<br />";
?>
<a href="get_hyperlink.php"> Ga terug </a>
