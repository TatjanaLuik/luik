<?php ob_start(); ?>

<h2>Администрирование странички</h2>
<form action="index.php/add" method="POST" name="add_date">

<table>

	<tr>
		<td>Автор:</td>
		<td><input type="textname=add_autor"></td>
	</tr>
	<tr>
		<td>Дата:</td>
		<td><input type="textname=add_date"></td>
	</tr>
	<tr>
		<td>Заголовок:</td>
		<td><input type="textname=add_title"></td>
	</tr>
	<tr>
		<td>Текст:</td>
		<td><textarea name="add_content"></textarea></td>
	</tr>
	<tr>
		<td><input type="reset" name=r"eset" value="Очистить"></td>
		<td><input type="submit"name="submit" value="Добавить"></td>
	</tr>
</table>
		
</form>

		

		<?php $content = ob_get_clean() ?> <!--в эту переменную будет все записано -->
		<?php  include "View/Templates/layout.php"; ?> <!--вставить файл в html-->
