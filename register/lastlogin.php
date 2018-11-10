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
   
    $sql = 'SELECT * FROM radpostauth ORDER BY id DESC LIMIT 50';
	//$sql = 'SELECT * FROM new_user ORDER BY tanggal DESC LIMIT 3';
    mysql_select_db('radius');
   
    $retval = mysql_query( $sql, $conn );
	
	
	if (mysql_num_rows($retval) > 0)
	{
		 echo "<p><h2>User yang terakhir login di Hotspot Ahmadiyah</p></h2>";
		 echo "<p><h3>50 user yang terakhir Login - Implementasi Fase 2</p></h3>";

		 echo "</br><table><tr><th>Tanggal</th><th>MAC</th><th>Nama</th><th>No HP</th><th>Client</th></tr>";
		 $i = 1;
		 while($row = mysql_fetch_array($retval)) 
		 {
			 
			 echo "<tr><td>" .$row['authdate']. "</td>";
			 echo "<td>" .$row['username']. "</td>";
			 $findata = $row['username'];
			 
			 $query2	= "select * from new_user where mac='$findata'";
			 mysql_select_db('khuddam_wifi');
			 $retval_find = mysql_query($query2, $conn);
			 
			 while ($data = mysql_fetch_array($retval_find)) {
				$getname = $data['nama'];
				$getclient = $data['identity'];
				$getnomorhp= $data['nomorhp'];
			}
			
			 echo "<td>" .$getname. "</td>";
			 echo "<td>" .$getnomorhp. "</td>";
			 echo "<td>" .$getclient. "</td></tr>";
			 
			 $i++;
		 }
		 echo "</table>";
	} 
?>  
</center>
</body>
</html>