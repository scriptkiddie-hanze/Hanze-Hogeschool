<?php
 $name = 'Bob de Bouwer';
 $location = urlencode("Diner Janssens & Kubiké");
 $age = '44';
 $url = "verwerk_get_hyperlink.php?name=$name&age=$age&location=$location"; 
?>
<a href="<?php echo $url?>"> Klik op mij! </a>
