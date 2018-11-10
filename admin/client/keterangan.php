<?php

include '../koneksi.php';

$mac = $_GET['mac'];
$isi = $_GET['isi'];

echo $mac." ".$isi." ";

$sql = "UPDATE user_enable SET keterangan='$isi' WHERE mac='$mac'";

$retval = mysql_query($sql);

echo $retval;

header("location:show.php");

?>