<?php 
/**
*Контроллер содержит функции,
*которые заставляют модель вывести нужную информацию
*/


/**
* Массив $posts содержит выборку всех полей из
* таблицы post.
* Подгружает файл list.php, содержащий вид вывода
* информации из $posts в браузере.
*/

function list_action()
{

	$posts=get_all_posts(); // выбрать все из записи
	require "View/Templates/list.php";
}

 		 function admin_action(){
 
		require "View/Templates/admin.php";} // внедрить файл/php
function show_action(){

	$post=get_post($id);
	require "View/Templates/admin.php";
}