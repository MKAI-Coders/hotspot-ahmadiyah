<?php
$connect = mysqli_connect("localhost","khud24_wifi","khu@@4mw1f!","khud24_khuddamwifi");

//$connect = mysqli_connect("localhost","root","","mydatabase");

if(mysqli_connect_errno($connect))
{
		echo 'Gagal terkoneksi ';
		echo mysqli_connect_error();
		
}

?>