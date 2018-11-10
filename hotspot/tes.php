<?php

	$conn = mysql_connect("localhost","root","mkai");
	mysql_select_db('khuddam_wifi');

	$sql	= "SELECT * FROM article_db ORDER BY id DESC";
	$retval = mysql_query($sql);
	
	$counter = 0;
	
	$judul = array("", "", "");
	
	$totaldata = mysql_num_rows($retval);
	
	while($row = mysql_fetch_array($retval)) 
	{
		$judul[$counter] = $row['judul'];
		
		if($counter==2)
			break;
		
		$counter++;
	}
	echo $judul[0];
	echo "</br>";
	echo $judul[1];
	echo "</br>";
	echo $judul[2];
?>