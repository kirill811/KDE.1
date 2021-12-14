<?php
require_once'lql.php';
?>
<form action="avtomagazin3.php" method="GET">
Добавить в таблицу коробку:<input type="text" name="NameKorobka"><br>
<input type="submit" name="submit" value="Добавить"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"INSERT HIGH_PRIORITY INTO korobka(id_korobka, korobka)
  VALUES (0, '$_GET[NameKorobka]')");
}
?>
<form method="post" action="http://kde/avtomagazin5.php">
<input type="submit" name="submitButton" value="Меню" />