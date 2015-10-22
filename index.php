
	<?php 
	/** подгружает model и Controller */
error_reporting(E_ALL);
ini_set('display_errors', 1);
	include_once 'Model/model.php'; // подключили весь файл сюда*/
	include_once 'Controller/controller.php'; // внедрение файла с названием Controller
	include_once 'Route/routing.php';
	echo $response;
	?>