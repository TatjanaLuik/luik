<?php
echo 'Привет!';
function open_database_connection(){
echo 'Привет!';
	$link = mysql_connect('localhost', 'luik', '123'); /** соединение с базой mySQL под именем и паролем*/
	mysql_select_db('luik', $link); /** выбор базы MySQL*/
	mysql_query('SET NAMES utf8'); /** уcтанавливает кодировку для кириллицы*/
	return $link;

}
function close_database_connection($link){ /** закрывает БД */
	mysql_close($link);
}
function get_all_posts(){ /** функция - взять все записи*/
	echo 'Привет!';
	$link = open_database_connection(); /** соединение с БД*/
	$sql = "SELECT * FROM post"; /** запрос к базе данных*/
	$result = mysql_query($sql,$link); /** выбираем все записи из таблицы*/
	$posts = array(); /** создаем пустой массив*/
	while ($row = mysql_fetch_assoc($result)){
		$posts[] = $row;
	}
	close_database_connection($link); /** уничтожаем link*/
	return $posts;
}