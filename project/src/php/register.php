<?php

include('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "select * from reg where usename='$username'";
// echo $sql;
$result = $mysqli->query($sql);
// var_dump($result);
// echo $result->num_rows;
if($result->num_rows>0){
	die('用户已存在');
}

$insertSql = "insert into reg(username,password)values('$username','$password')";

$res = $mysqli->query($insertSql);
// var_dump($res);
if($res){
	echo '<script>alert("注册成功，跳转登录页面");location.href="../html/login.html";</script>';
}

$mysqli->close();  //关闭连接
?>