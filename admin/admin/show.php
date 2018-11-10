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
		<li><a href="statistik.php?orderBy=TotalTime">Statistik Pengguna</a></li>
		<li><a href="lastviewer.php">Data Pengunjung</a></li>
		<li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
  </div>
</header>

<div class="content">

	<form action="export.php" method="post" name="export_excel">
 
			<div class="control-group">
				<div class="controls">
					<button type="submit" id="export" name="export" class="btn btn-primary button-loading" data-loading-text="Loading...">Export Data to Excel File</button>
					<input type="hidden" name="convert" value="1"></input>
				</div>
			</div>
	</form>
	</br>
  <?php
	include '../koneksi.php';
	
	$username = $_SESSION['username'];
	
	$identity="NULL";
	
    echo "<p><h3>Pengguna Terdaftar</p></h3>";

	$username = $_SESSION['username'];			
	
	$sql	= "select * from data_client where username='$username'";
	$retval = mysql_query($sql);
	$data = mysql_fetch_array($retval);
			
	$identity = $data['identity'];
	
	if($username == 'admin')
		$sql = "SELECT * FROM new_user ORDER BY tanggal DESC";
	else
		$sql = "SELECT * FROM new_user WHERE identity='$identity' ORDER BY tanggal DESC";
	
    $retval = mysql_query($sql);
	$totaldata = mysql_num_rows($retval);
	
	if (mysql_num_rows($retval) > 0)
	{
		 echo "Jumlah yang mendaftar : ".$totaldata;

		 echo "</br></br><table><tr><th>No</th><th>Tanggal</th><th>Nama</th><th>MAC</th><th>Nomor HP</th><th>PIN Code</th><th>Client</th><th>Status</th><th>Keterangan</th></tr>";
		 $i = 1;
		 while($row = mysql_fetch_array($retval)) 
		 {
			 echo "<tr><td>" .$i. "</td>";
			 echo "<td>" .$row['tanggal']. "</td>";
			 echo "<td>" .$row['nama']. "</td>";
			 echo "<td>" .$row['mac']. "</td>";
			 echo "<td>" .$row['nomorhp']. "</td>";
			 echo "<td>" .$row['pincode']. "</td>";
			 echo "<td>" .$row['identity']. "</td>";
			 
			 
			 $mac_tampil = $row['mac'];
			 $sql2 = "SELECT * FROM user_enable WHERE mac='$mac_tampil'";
			 $retval2 = mysql_query($sql2);
			 $row2 = mysql_fetch_array($retval2);
			 
			 $disable_status = $row2['disable_status'];
			 $keterangan = $row2['keterangan'];
			 
			 switch($disable_status)
			 {
				 case '0':
					$stat_label = "<b>ON</b>";
					break;
				 case '1':
					$stat_label = "<b>OFF</b>";
					break;
			 }
			 
			 switch($keterangan)
			 {
				 case '0':
					$ket_label = "Tidak tahu";
					break;
				 case '1':
					$ket_label = "<b>Ghair Ahmadi</b>";
					break;
				  case '2':
					$ket_label = "<b>Ahmadi</b>";
					break;
			 }
			 
			 if($disable_status == 0)
				echo "<td  bgcolor='#00FF00'>";
			else
				echo "<td  bgcolor='#FF0000'>";
			 
			 echo $stat_label . "</td>";
			 
			 if($keterangan == '0')
				echo "<td  bgcolor='#FFFFFF'>";
			else if($keterangan == '1')
				echo "<td  bgcolor='#FF0000'>";
			else
				echo "<td  bgcolor='#00FF00'>";
			 
			 
			 echo $ket_label. "</td></tr>";
			 
			 
			 
			 $i++;
		 
		 }
		 echo "</table>";
	} 
?>  
  
</div>
  
</body>
</html>