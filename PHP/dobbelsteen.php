
<form action="" method="post">
	<button type="sumbit" name="sub" value="dobbelsteen">Werp de dobbelsteen</button>
</form>

<?php

function gooiDobbelSteen(){
	$dobbelsteen = rand(1,6);
	return $dobbelsteen;
}

if(isset($_POST['sub']))
	{
		echo gooiDobbelSteen();
	}
?>