<?php ob_start(); ?>
<h2>Список постов</h2>
		<ol>
			<?php foreach ($posts as $post): ?>  <!--определяет, сколько строк (li) будет записано-->
			<li>
				<a href="./index.php?id=<?php echo $post['ID'];?>">  <!--вставляем переменную php-->
				
					<?php echo $post['title'];?>
				</a>
			</li>
		<?php endforeach; ?>
		</ol>
		<?php $content = ob_get_clean() ?> <!--в эту переменную будет все записано -->
		<?php  include "View/Templates/layout.php"; ?> <!--вставить файл в html-->