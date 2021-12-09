<?php
require_once 'lql.php';
?>
<form action = "avtomagazin3.php" method = "GET">
<caption> Заполните данные о клиенте </caption>
<table border="1">
<tr>
<th> Номер заказчика </th>
<th> Номер модели </th>
<th> ФИО заказчика </th>
<th> Адресс заказчика </th>
<th> Телефон </th>
<th> Дата заказа </th>
</tr>
<tr>
<td> <input type = "int" name = "id_zokoza"> </td>
<td> <input type = "int" name = "id_model"> </td>
<td> <input type = "text" name = "ФИО"> </td>
<td> <input type = "text" name = "Адрес заказа"> </td>
<td> <input type = "text" name = "Телефон"> </td>
<td> <input type = "text" name = "Дата заказа"> </td>
</tr>
</table>
<br>
<input type = "submit" name = "submit1" value = "Добавить клиента"><br>
<br>
</form>
<?php
if ($_GET['submit1'])
{
	$result = mysqli_query($link,"INSERT HIGH_PRIORITY INTO klients (id_zokoza, id_model, ФИО, Адрес заказа, Телефон, Дата заказа)
	VALUES (0,'$_GET[id_zokoza]','$_GET[id_model]','$_GET[ФИО]','$_GET[Адрес заказа]','$_GET[Дата заказа]');");
}
?>