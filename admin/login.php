<?php 
include 'koneksi.php';

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);

$query = mysql_query("select * from admin where BINARY username='$username' and BINARY password='$password'");
$cek = mysql_num_rows($query);

if($cek > 0){
	session_start();
	
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
	
	if($username=='admin')
		header("location:admin/index.php");
	else
		header("location:client/index.php");
	
}else{
	//header("location:index.php");S
	echo "<h1>Maaf password anda salah</h1>";
	echo "<input type='button' onclick=\"location.href='/admin';\" value='BACK' />";
}
?>