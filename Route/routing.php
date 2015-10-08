
	<?php /** подгружает model i Controller */
	echo $_SERVER['REQUEST_URI']; //выводит URI (идентификатор) 
	$uri=$_SERVER['REQUEST_URI'];
	$u=explode('?',$uri);
	$uri=Su[0];
	echo "<br>newUri=".$uri;

	if ('/luik/'== $uri OR '/luik/index.php'==$uri){
		
		list_action();
	}
	elseif('/luik/index.php/admin==$uri'){

		
		admin_action(); #code...
	}

	elseif('/luik/index.php/show==$uri'){

		
		show_action($_REQUEST['id']);
	}
		