<?php 
/**
*Контроллер содержит функции,
*которые заставляют модель вывести нужную информацию
*/


function render_template($path, array $args)
{
	extract($args);
	ob_start();
	require $path; // 
	$html=ob_get_clean();//
	return $html;
}

function list_action()
{
	$posts=get_all_posts(); // выбрать все из записи // добывает информацю из модели
	$html=render_template ('View/Templates/list.php',array('posts'=>$posts));
	return $html;

	//require "View/Templates/list.php"; // отдает информацию виду, к. посылает ответ
} 

function admin_action(){
	$posts=get_all_posts();
 	require "View/Templates/admin.php";
} // внедрить файл/php

function show_action($id){
	$posts=get_post($id);
	$html=render_template('View/Templates/show.php',array('posts'=>$posts));
	return $html;
	//require "View/Templates/show.php"; /*внедрить файл*/
}

function add_action()
{
	add_post();
	/*$posts=get_all_posts();
	$html=render_template('View/Templates/admin.php',array('posts'=>$posts));
	return $html;*/
	//require "View/Templates/admin.php";
}
function about_action() // при появлении в адресной строке about внедряем файл about.php
{	//add_post();
	$html=render_template('View/Templates/about.php', array('posts'=>$posts));
	return $html;
	//require "View/Templates/about.php";
}

		
