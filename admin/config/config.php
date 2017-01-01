<?php

	header("Content-type:text/html;charset=UTF8");
	define('LocalHost', 'LocalHost');
	define('UserName', 'root');
	define('PassWord', '');
	define('DBName', 'blog');
	header('Access-Control-Allow-Origin:*');

	
	$con=mysqli_connect(LocalHost, UserName, PassWord, DBName); 
	$con->query("SET NAMES UTF8");
?>