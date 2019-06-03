<?php
include('register-succful.php')
$user=$_REQUEST['in-account'];
$password=$_REQUEST['in-password'];
$sql ="select * from reg where username=$user' and password='$password'";
$result = $mysqli->query($sql);
if ($result->num_rows>0){
	echo"<script>alert('登陆成功，点击跳转');location.href='beta.html';<script>";
}else{
	echo"<script> alert('登陆失败，点击跳转');location.href='login.html';<script>"
}
?>