<?php
header("content-type:text/html;charset=utf-8");
$mysql_conf=array(
	'host'=>'localhost:8080',
	'db_user'=>'root',
	'db_pwd'=>'',
	'db'=>'register'
);
$mysql=@new mysql($mysql_conf['host'],$mysql_conf['db_user'],$mysql_conf['db_pwd']);
if($mysql->connect_errno){
	die('连接错误'.$mysql->connect_errno);

}
$mysqli->query("set names 'utf8';"); 
$select_db = $mysqli->select_db($mysql_conf['db']);
if(!$select_db){
	// 检查数据库是否选择成功
	die('选择数据库错误'.$mysqli->error);
}

$sql = "select * from reg"; //查询语句

$result = $mysqli->query($sql);  //执行sql语句  并获得结果集

// var_dump($result) ;
$arr = array();
while($row=$result->fetch_assoc()){
	// print_r($row);
	array_push($arr,$row);  //将每一条结果放入到数组
}

// var_dump($arr);
$json = json_encode($arr);
echo $json;
?>
?>