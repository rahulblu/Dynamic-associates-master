<?php
	session_start();
	function checkFile($page)
	{
		if(file_exists($page))
		{
			require_once $page;
		}
		else{
			require_once 'error/error.php';
		}
	}
	if(isset($_REQUEST['view']))
	{
		$url=$_REQUEST['view'];
		$page="view/".$url.".php";
		checkFile($page);
	}
	else if(isset($_REQUEST['user']))
	{
		$url=$_REQUEST['user'];
		$page="user/".$_REQUEST['user'].".php";
		checkFile($page);
	}
	else{
		$page="view/home.php";
		checkFile($page);
	}
?>