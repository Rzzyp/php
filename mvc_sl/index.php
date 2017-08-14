<?php
	header('content-type:text/html;charset=utf-8');
	//载入mvc类
	require_once('Model.php');
	require_once('View.php');
	require_once('Controller.php');

	//调用指定的控制器 和指定的方法
	$c=isset($_GET['c']) ?$_GET['c'] :'Controller' ;
	$a=isset($_GET['a']) ?$_GET['a'] :'show';

	$controller=new $c;
	$controller->$a();



?>