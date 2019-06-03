<?php
 header("content-type:text/html;charset=utf-8");
 $mysql_conf=array(
	 'host=>localhost:8080',
	 'db_user'=>'root',
	 'db_pwd'=>'',
	 'db'=>'register'
 );
 $mysql=@new mysql($mysql_conf['host'],$mysql_conf['db_user'],$mysql_conf['db_pwd']);
 if($mysqli->connect_errno){
	 die('连接错误'.$mysqli->connect_errno);
 }
 $mysql->query("set names 'utf-8';");
 $select_db=$mysql->select_db($mysql_conf['db']);
 if(!$select_db){
	 die('选择数据库错误'.$mysql->error);
 }
?>