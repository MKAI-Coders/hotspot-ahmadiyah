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
					<input type="hidden" name="convert" value="2"></input>
				</div>
			</div>
	</form>
	</br>
  
  
  <?php
	include '../koneksi.php';
	
    $sql = "SELECT * FROM login_user ORDER BY id DESC";
   
    $retval = mysql_query($sql);
	
	$totaldata = mysql_num_rows($retval);
	
	if ($totaldata > 0)
	{
		 //echo "<p><h2>User yang terakhir login di Hotspot Ahmadiyah</p></h2>";
		 echo "<p><h3>Pengguna Login</p></h3>";
		 
		 echo "Jumlah yang telah Login : ".$totaldata;
		 
		 echo "</br></br><table><tr><th>Tanggal</th><th>Nama</th><th>No HP</th><th>Client</th></tr>";
		 $i = 1;
		 while($row = mysql_fetch_array($retval)) 
		 {
			 
			 echo "<tr><td>" .$row['tanggal']. "</td>";
			 //echo "<td>" .$row['username']. "</td>";
			 $findata = $row['mac'];
			 
			 $query2	= "select * from new_user where mac='$findata'";
			 mysql_select_db('khuddam_wifi');
			 $retval_find = mysql_query($query2);
			 
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
  
</div>
  
</body>
</html>