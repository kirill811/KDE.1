<?php
require_once'lql.php';
?>
<form action="avtomagazin4.php" method="GET">
Удалить коробку:<input type="text" name="NameKorobka"><br>
<input type="submit" name="submit" value="Удалить"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"DELETE LOW_PRIORITY QUICK
	FROM korobka 
	WHERE korobka= '$_GET[NameKorobka]'
	LIMIT 100");
}
?>
<form method="post" action="http://kde/avtomagazin5.php">
<input type="submit" name="submitButton" value="Меню" />