<?php
require_once'lql.php';
?>
<form action="avtomagazin.php" method="GET">
 Цвет:<select name="NameColor">
 <?php
$result=mysqli_query($link,"SELECT
  color.color
FROM color");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
	echo"<option>". ($row['color']."</option>");
}
?>
 </select><br>
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  `klient u zakaz`.id_zokoz,
  `klient u zakaz`.ФИО,
  `klient u zakaz`.`Дата заказа`,
  `model avto`.model,
  `klient u zakaz`.`Адрес заказа`
FROM `model avto`
  INNER JOIN obivka
    ON `model avto`.id_odivka = obivka.id_obivka
  INNER JOIN korobka
    ON `model avto`.id_korobka = korobka.id_korobka
  INNER JOIN color
    ON `model avto`.id_color = color.id_color
  INNER JOIN `klient u zakaz`
    ON `klient u zakaz`.id_model = `model avto`.id_model
WHERE color.color = '$_GET[NameColor]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Номер заказа".'</th>';
echo '<th>'."ФИО".'</th>';
echo '<th>'."Дата заказа".'</th>';
echo '<th>'."Модель".'</th>';
echo '<th>'."Адрес заказа".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
	

	echo '<tr>';
	echo '<td>'.$row['id_zokoz'].'</td>';
	echo '<td>'.$row['ФИО'].'</td>';
	echo '<td>'.$row['Дата заказа'].'</td>';
	echo '<td>'.$row['model'].'</td>';
	echo '<td>'.$row['Адрес заказа'].'</td>';
	echo '</tr>';
	
}
}
?>
<form method="post" action="http://kde/avtomagazin5.php">
<input type="submit" name="submitButton" value="Меню" />
</form>