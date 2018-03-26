<?php 
	define('user', 'root');
	define('server', 'localhost');
	define('password', '');
	define('dbName', 'capstone');
	
	
	class  connectionDb
	{
	function __construct(){
	$conn=mysql_connect(server,user,password);
	mysql_select_db(dbName,$conn);
	if(!$conn){
  			echo "connectivity Error".mysql_error();
			}
				}
	function getId($table)
	{	$tableId=$table."_id";
		$sql="select max($tableId) as maxId from $table";
		$res=mysql_query($sql);
		$data=mysql_fetch_assoc($res);
		$maxId=$data['maxId'];
		return $maxId+1;
	}			
	}
?>