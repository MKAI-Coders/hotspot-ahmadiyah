<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="refresh" content="10">
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
        <li><a href="show.php">Pengguna terdaftar</a></li>
		<li><a href="lastlogin.php">Pengguna Login</a></li>
		<li><a href="statistik.php?orderBy=TotalTime">Statistik Pengguna</a></li>
		<li><a href="lastviewer.php">Data Pengunjung</a></li>
		<li><a href="articleread.php">Pembaca Artikel</a></li>
		<li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
  </div>
</header>

<div class="content">
  <h1>Hotspot Ahmadiyah</h1>
  <p>Halaman Administrator untuk Client</p>
  </br>
  <hr>
  </br>
  <h3><?php echo "Selamat Datang, ".$_SESSION['username']; ?></h3>
  
  <?php
		
			$conn = mysql_connect("localhost","root","mkai");
				
			mysql_select_db('khuddam_wifi');
			$username = $_SESSION['username'];			
			//$iden = mysql_real_escape_string($identity);
			$query	= "select * from data_client where username='$username'";
			$retval = mysql_query($query, $conn);
			
			$data = mysql_fetch_array($retval);
			
			$getnama = $data['nama'];
			$getalamat = $data['alamat'];
			$getnomorhp = $data['nomorhp'];
			$getidentity = $data['identity'];
			
			echo "</br><b>Nama : </b></br>$getnama</br><b>Alamat : </b></br>$getalamat</br><b>Nomor HP : </b></br>$getnomorhp</br></br>";
			
			$ip =   $data['nasipaddr'];
			
			echo "<b>IDENTITY : </b> $getidentity</br>";
			
			echo "<b>STATUS : </b>";
			
			exec("timeout 0.8 ping -c 1 -s 1 $ip", $output, $status);
			if ($status == 0)
			echo "RUNNING";
			else
			echo "OFF";
			echo "</br>";
		
	?>
  
  
  
</div>

</body>
</html>