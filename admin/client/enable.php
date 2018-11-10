<?php

include '../koneksi.php';

$mac = $_GET['mac'];

echo $mac;

$sql = "UPDATE user_enable SET disable_status=0 WHERE mac='$mac'";

$retval = mysql_query($sql);

echo $retval;

header("location:show.php");

?>