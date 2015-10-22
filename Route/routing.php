
	<?php /** подгружает model i Controller */
	echo $_SERVER['REQUEST_URI']; //выводит URI (идентификатор) 
	$uri=$_SERVER['REQUEST_URI'];
	$u=explode('?',$uri);
	$uri=$u[0];
	$uri=rtrim($uri,'/');
	echo "<br>newUri=".$uri;

	if ('/luik'== $uri OR '/luik/index.php'==$uri){
		$response=list_action();
	}
	elseif('/luik/index.php/admin'==$uri){
		$response=admin_action(); 
	}
	elseif('/luik/index.php/show'==$uri){
		$response=show_action($_REQUEST['id']);
	}
	/*elseif('/luik/index.php/add'==$uri) {
		$response=add_action();
	}*/
	elseif('/luik/index.php/about'==$uri) { // если в адресной строке появилась запись
		$response=about_action(); // вызываем функцию about_action
	}
	