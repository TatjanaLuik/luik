<?php ob_start(); ?>
<?php foreach ($posts as $post): ?> <!--начали перебор массива-->
	
<h2><?php echo $post['title'];?></h2>

<div>Дата: <?php echo $post['date'];?></div>
<div>Автор: <?php echo $post['autor'];?></div>
<div>Статья: <?php echo $post['content'];?></div>	
<?php endforeach;?><!--закончили перебор массива-->
		<?php $content = ob_get_clean() ?> <!--в эту переменную будет все записано -->

		<?php include "View/Templates/layout.php"; ?>
		