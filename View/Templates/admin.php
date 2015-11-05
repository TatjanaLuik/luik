<?php ob_start(); ?>

<?php
	if(isset($_POST['submit'])){

		$add= add_action();
	}
?>

<h2>Администрирование странички</h2>
<form action="" method="POST" name="add_data">

<table>

	<tr>
		<td>Автор:</td>
		<td><input type="text" name="add_autor"></td>
	</tr>
	<tr>
		<td>Заголовок:</td>
		<td><input type="text" name="add_title"></td>
	</tr>
	<tr>
		<td>Текст:</td>
		<td><textarea name="add_content"></textarea></td>
	</tr>
	<tr>
		<td><input type="reset" name="reset" value="Очистить"></td>
		<td><input type="submit"name="submit" value="Добавить"></td>
	</tr>
</table>
		
</form>
<h2>Список постов</h2>
		<ol>
			<?php foreach ($posts as $post): ?>  <!--определяет, сколько строк (li) будет записано-->
			<li>
			<a href="/luik/index.php/show?id=<?php echo $post['id'];?>">  <!--вставляем переменную php-->
				
			<?php echo $post['title'];?>
			</a> &nbsp;&nbsp;
			<a href="/luik/index.php/edit?id=<?php echo $post['id'];?>">Редактировать</a>
			</li>
		<?php endforeach; ?>
		</ol>
<?php $content = ob_get_clean() ?> <!--в эту переменную будет все записано -->
<?php include_once "View/Templates/layout.php";
		
