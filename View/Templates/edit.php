<?php ob_start(); 
if($_REQUEST['edit']) /* если нажата кнопка редактировать (edit) */
	{
	edit_data($_REQUEST['id']); /* функция обработки */
	}
?>

<?php foreach ($posts as $post): ?> <!--начали перебор массива-->

<form action="" method="POST" name="edit_data">
<table>
	<tr>
		<td>Заголовок: </td>
		<td><input type="text" name="title" value="<?php echo $post['title'];?>"></td>
	</tr>

	<tr>
		<td>Дата: </td>
		<td><input type="text" name="date" value="<?php echo $post['date'];?>"></td>
	</tr>

	<tr>
		<td>Автор: </td>
		<td><input type="text" name="autor" value="<?php echo $post['autor'];?>"></td>
	</tr>

	<tr>
		<td>Статья: </td>
		<td><textarea name="content"><?php echo $post['content'];?></textarea></td>
	</tr>

	<tr>
		<td><input type="reset" name="reset" value="Очистить"></td>
		<td><input type="submit" name="edit" value="Сохранить"></td>
	</tr>

</table>

</form>

	
<?php endforeach;?><!--закончили перебор массива-->
		<?php $content = ob_get_clean() ?> <!--в эту переменную будет все записано -->

		<?php include "View/Templates/layout.php"; ?>