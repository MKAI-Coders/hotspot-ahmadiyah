<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Admin Page | Hotspot Ahmadiyah</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style2.css">
  
</head>
<body>

<?php include 'cek-login.php'; ?>

<header>
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"></label>
  <font color="#ffffff">Halaman Client <?php echo $_SESSION['username']; ?></font>
  <div class="jw-drawer">
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="show.php">Pengguna Terdaftar</a></li>
		<li><a href="lastlogin.php">Pengguna Login</a></li>
		<li>
		<a href="statistik.php?orderBy=TotalTime">Statistik Pengguna</a>
		</li>
		<li><a href="lastviewer.php">Data Pengunjung</a></li>
		<li><a href="articleread.php">Pembaca Artikel</a></li>
		<li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
  </div>
</header>

<div class="content">
  
  <?php
	include '../koneksi.php';
	include 'fungsi.php';
	
	$username = $_SESSION['username'];		
	
	$sql	= "select * from data_client where username='$username'";
	$retval = mysql_query($sql);
	$data = mysql_fetch_array($retval);
			
	$nasipaddr = $data['nasipaddr'];
	$identity = $data['identity'];
	
	$orderBy = $_GET['orderBy'];
    
	$sql = "SELECT distinct(username),
			sum(AcctSessionTime) as TotalTime,
			sum(AcctInputOctets) As Upload,
			sum(AcctOutputOctets) As Download,
			sum(AcctInputOctets + AcctOutputOctets) as Bandwidth
			FROM radacct
			WHERE calledstationid='$identity'
			GROUP BY username
			ORDER BY $orderBy DESC";
	
	//WHERE nasipaddress='$nasipaddr'
	
    mysql_select_db('radius');
    $retval = mysql_query($sql);
	
	$totaldata = mysql_num_rows($retval);
	
	if ($totaldata > 0)
	{
		 //echo "<p><h2>User yang terakhir login di Hotspot Ahmadiyah</p></h2>";
		 echo "<p><h3>Data Penggunaan Internet - $orderBy</h3></p>";
		 
		 if($orderBy=='Bandwidth')
			echo "</br><p style='font-size:12px;'><a href='statistik.php?orderBy=TotalTime'>Urutkan berdasarkan waktu (TotalTime)</a></p>";
		 else
			echo "</br><p style='font-size:12px;'><a href='statistik.php?orderBy=Bandwidth'>Urutkan berdasarkan kuota pemakaian (Bandwidth)</a></p>";
		 
		 //echo "<p>Urutkan berdasarkan kuota pemakaian</p>";
		 
		 echo "</br></br><table><tr><th>No</th><th>Nama</th><th>No HP</th><th>Download</th><th>Upload</th><th>Waktu</th></tr>";
		 $i = 1;
		 while($row = mysql_fetch_array($retval)) 
		 {
			 
			 echo "<tr><td>" .$i. "</td>";
			 
			 $findata = $row['username'];
			 
			 $query2	= "select * from new_user where mac='$findata'";
			 mysql_select_db('khuddam_wifi');
			 $retval_find = mysql_query($query2);
			 
			 while ($data = mysql_fetch_array($retval_find)) {
				$getname = $data['nama'];
				$getnomorhp= $data['nomorhp'];
			 }
			
			 echo "<td>" .$getname. "</td>";
			 echo "<td>" .$getnomorhp. "</td>";
			 echo "<td>" .toxbyte($row['Download']). "</td>";
			 echo "<td>" .toxbyte($row['Upload']). "</td>";
			 echo "<td>" .time2str($row['TotalTime']). "</td></tr>";
			 
			 $i++;
		 }
		 echo "</table>";
	} 
?>  
  
</div>
  
</body>
</html>