<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>

<body>
<center>
<?php

   $conn = mysql_connect("localhost","root","mkai");

	if(! $conn ) {
      die('Could not connect: ' . mysql_error());
	}
   
    $sql = "SELECT * FROM new_user WHERE identity='FreeWifi_Masjid-An-Nur' ORDER BY tanggal DESC";
	//$sql = 'SELECT * FROM new_user ORDER BY tanggal DESC LIMIT 3';
    mysql_select_db('khuddam_wifi');
   
    $retval = mysql_query( $sql, $conn );
	$totaldata = mysql_num_rows($retval);
	
	if (mysql_num_rows($retval) > 0)
	{
		 echo "<p><h2>User yang terdaftar di Hotspot Ahmadiyah</p></h2>";
		 echo "<p><h3>Masjid An-Nur Tangerang - Implementasi Fase 2</p></h3>";
		 echo "Jumlah yang mendaftar : ".$totaldata;

		 echo "</br></br><table><tr><th>No</th><th>Tanggal</th><th>Nama</th><th>MAC</th><th>Nomor HP</th><th>PIN Code</th><th>Client</th></tr>";
		 $i = 1;
		 while($row = mysql_fetch_array($retval)) 
		 {
			 echo "<tr><td>" .$i. "</td>";
			 echo "<td>" .$row['tanggal']. "</td>";
			 echo "<td>" .$row['nama']. "</td>";
			 echo "<td>" .$row['mac']. "</td>";
			 echo "<td>" .$row['nomorhp']. "</td>";
			 echo "<td>" .$row['pincode']. "</td>";
			 echo "<td>" .$row['identity']. "</td></tr>";
			 $i++;
		 
		 }
		 echo "</table>";
	} 
?>  
</center>
</body>
</html>