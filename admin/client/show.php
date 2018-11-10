<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Admin Page | Hotspot Ahmadiyah</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style2.css">
  
  <link rel="stylesheet" href="css/dropdown.css">
  
  <script>
	
	
	function myFunction(value1,value2)
	{
		//mac = document.getElementById("mac_tampil").value;
		
		if(value1 == '0')
			window.location = "disable.php?mac="+value2;
		else
			window.location = "enable.php?mac="+value2;
		
		//disable.php?mac=$mac_tampil
	}
	
	
	function myFunction2(value1,value2)
	{

		window.location = "keterangan.php?isi="+value1+"&mac="+value2;
		//disable.php?mac=$mac_tampil
	}
    </script>
  
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
		<li><a href="articleread.php">Pembaca Artikel</a></li>
		<li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
  </div>
</header>

<div class="content">

  
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

		 echo "</br></br><table><tr><th>No</th><th>Tanggal</th><th>Nama</th><th>Nomor HP</th><th>PIN Code</th><th>Status</th><th>Keterangan</th></tr>";
		 $i = 1;
		 while($row = mysql_fetch_array($retval)) 
		 {
			 echo "<tr><td>" .$i. "</td>";
			 echo "<td>" .$row['tanggal']. "</td>";
			 echo "<td>" .$row['nama']. "</td>";
			 //echo "<td>" .$row['mac']. "</td>";
			 echo "<td>" .$row['nomorhp']. "</td>";
			 echo "<td>" .$row['pincode']. "</td>";
			 
			 $mac_tampil = $row['mac'];
			 
			 $sql2 = "SELECT * FROM user_enable WHERE mac='$mac_tampil'";
			 $retval2 = mysql_query($sql2);
			 $row2 = mysql_fetch_array($retval2);
			 
			 $disable_status = $row2['disable_status'];
			 
			 $keterangan = $row2['keterangan'];
			 
			if($disable_status == 0)
				echo "<td  bgcolor='#00FF00'>";
			else
				echo "<td  bgcolor='#FF0000'>";
			
			echo "<form>";
			?>
			<select name='status' id='soflow-color' style='width: 75px;font-size:' onchange="myFunction(this.options[this.selectedIndex].value,'<?php echo $mac_tampil;?>')">;
			<?php
			 if($disable_status == 0)
			 {
				 
				//echo "<td><b>ON</b>, <a href='disable.php?mac=$mac_tampil'>disable</a></td>";
				
				echo "<option value='0'>OFF</option>";
				echo "<option value='1' selected>ON</option>";
			 }
			 else
			 {
				//echo "<td>OFF, <a href='enable.php?mac=$mac_tampil'>enable</a></td>";
				
				echo "<option value='0' selected >OFF</option>";
				echo "<option value='1'>ON</option>";
			 }
			 
			 
			 
			 echo "</form></td>";
			 
			 if($keterangan == '0')
				echo "<td  bgcolor='#FFFFFF'>";
			else if($keterangan == '1')
				echo "<td  bgcolor='#FF0000'>";
			else
				echo "<td  bgcolor='#00FF00'>";
			
			 ?>
			<select name='status' id='soflow-color' style='width: 140px;font-size:' onchange="myFunction2(this.options[this.selectedIndex].value,'<?php echo $mac_tampil;?>')">;
			<?php
			 
			 //$keterangan = 0;
			 
			 if($keterangan == '0')
			 {
				//echo "<td><b>ON</b>, <a href='disable.php?mac=$mac_tampil'>disable</a></td>";
				
				echo "<option value='0' selected>Tidak Tahu</option>";
				echo "<option value='1'>Ghair Ahmadi</option>";
				echo "<option value='2'>Ahmadi</option>";
			 }
			 else if($keterangan == '1')
			 {
				echo "<option value='0' >Tidak Tahu</option>";
				echo "<option value='1'selected>Ghair Ahmadi</option>";
				echo "<option value='2'>Ahmadi</option>";
			 }
			 else
			 {
				echo "<option value='0' >Tidak Tahu</option>";
				echo "<option value='1'>Ghair Ahmadi</option>";
				echo "<option value='2' selected>Ahmadi</option>";
			 }
			 
			 echo "</td>";
			 echo "</tr>";
			 $i++;
		 
		 }
		 echo "</table>";
	} 
?>  
  
</div>
  
</body>
</html>