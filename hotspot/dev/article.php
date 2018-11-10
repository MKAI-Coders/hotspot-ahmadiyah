<?php

	$no = $_GET['no'];
	$mac = $_GET['mac'];
	$identity = $_GET['identity'];
	
	$conn = mysql_connect("localhost","root","mkai");
	if(!$conn ) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('khuddam_wifi');
	
	$sql	= "SELECT * FROM article_db WHERE id='$no'";
	$retval = mysql_query($sql,$conn);
	$row = mysql_fetch_array($retval);
	$link = $row['link'];
	
	if($identity!='')
		$query =  "INSERT INTO article_read(mac,identity,id) VALUES ('$mac','$identity','$no')";
	else
		$query =  "INSERT INTO article_read(mac,identity,id) VALUES ('UNKNOWN','UNKNOWN','$no')";
	
	mysql_query($query,$conn);

	header("location: ".$link);
?>