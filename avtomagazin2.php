<?php
require_once'lql.php';
?>
<form action="avtomagazin2.php" method="GET">
 Номер машины:<select name="NameKorobka">
 <?php
$result=mysqli_query($link,"SELECT
  korobka.korobka
FROM korobka");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
	echo"<option>". ($row['korobka']."</option>");
}
?>
 </select><br>
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  `model avto`.model,
  `klient u zakaz`.id_zokoz,
  `klient u zakaz`.ФИО,
  `klient u zakaz`.`Адрес заказа`,
  `klient u zakaz`.`Дата заказа`
FROM `model avto`
  INNER JOIN korobka
    ON `model avto`.id_korobka = korobka.id_korobka
  INNER JOIN `klient u zakaz`
    ON `klient u zakaz`.id_model = `model avto`.id_model
WHERE korobka.korobka = '$_GET[NameKorobka]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Модель".'</th>';
echo '<th>'."Номер заказа".'</th>';
echo '<th>'."ФИО".'</th>';
echo '<th>'."Адрес заказа".'</th>';
echo '<th>'."Дата заказа".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
	

	echo '<tr>';
		echo '<td>'.$row['model'].'</td>';
	echo '<td>'.$row['id_zokoz'].'</td>';
	echo '<td>'.$row['ФИО'].'</td>';
	echo '<td>'.$row['Адрес заказа'].'</td>';
	echo '<td>'.$row['Дата заказа'].'</td>';
	echo '</tr>';
	
}
}
?>