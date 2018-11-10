<?php

$mac=$_POST['mac'];
$identity=$_POST['identity'];
	
echo "<html>";

echo "<head><link rel='stylesheet' href='css/style2.css'><meta http-equiv='refresh' content='5;url=http://hotspot.loveforall.id/' /><style> body {background-image: url('img/bg_al-islam.gif');background-color: #cccccc;}</style></head>";

if(isset($_POST['nomorhp']))
{
	$conn = mysql_connect("localhost","root","mkai");
	
	if(!$conn ) {
      die('Could not connect: ' . mysql_error());
    }
	
	mysql_select_db('khuddam_wifi');
	
	//check duplikasi nomor hp
	$nomorhp_sql = mysql_real_escape_string($_POST['nomorhp']);
	$query	= "select nomorhp from new_user where nomorhp='$nomorhp_sql'";
	$retval = mysql_query($query, $conn);
	$nomorhp_count = mysql_num_rows($retval);
	//echo $row;
	
	$username_sql = mysql_real_escape_string($_POST['mac']);
	$query	= "select mac from new_user where mac='$username_sql'";
	$retval = mysql_query($query, $conn);
	$username_count = mysql_num_rows($retval);
	
	$nama = $_POST['nama'];
	$nomorhp = $_POST['nomorhp'];
	
	//echo $nomorhp_count;
	//echo "</br>";
	//echo $username_count;
	
	if($nomorhp_count == 0 && $username_count == 0 && $mac!='')
	{
		// create a variable
		
		$pincode = rand(1000,9999);
	
		$query = "INSERT INTO new_user(nama,alamat,email,mac,identity,nomorhp,pincode) VALUES ('$nama','','','$mac','$identity','$nomorhp','$pincode')";
		mysql_query($query,$conn);
		
		$query = "INSERT INTO user_enable(nama,mac,identity,nomorhp,disable_status) VALUES ('$nama','$mac','$identity','$nomorhp','0')";
		mysql_query($query,$conn);
		
		// to freeradius
		mysql_select_db('radius');
		$query =  "INSERT INTO radcheck(username,attribute,op,value) VALUES ('$mac','Cleartext-Password',':=','$pincode')";
		$retval = mysql_query($query, $conn);
		$query =  "INSERT INTO radusergroup(username,groupname,priority) VALUES ('$mac','1jamperhari','0')";
		$retval = mysql_query($query, $conn);
		
		// to Daloradius
		$currDate = date('Y-m-d H:i:s');
		$query =  "INSERT INTO userinfo(username,firstname,lastname,email,department,company,workphone,homephone,mobilephone,address,city,state,country,zip,notes,changeuserinfo,creationdate, creationby) VALUES ('$mac','$nama','','','','','','','$nomorhp','','','','','','','0','$currDate','administrator')";
		$retval = mysql_query($query, $conn);
		
		echo "<div class='my-block'><font color='white'><p><h2>Selamat $nama pendaftaran berhasil dilakukan </h2> <h4>Mohon tunggu pengiriman <i>PIN Code</i> melalui SMS ke nomor $nomorhp</h4></p></font>";
		echo "</br><a href='http://hotspot.loveforall.id'><font color='white'>[ Kembali ke Halaman Login ]</font></a></div>";
		
		$message = "Asw. Terima kasih $nama, pendaftaran sukses. Internet gratis 1 jam/hari dgn Kode PIN : $pincode. loveforall.id";
		
		$userkey="vj17mf"; // userkey lihat di zenziva $userkey="vj17mf";
		$passkey="mahmudah"; // set passkey di zenziva
		
		
		$url = "https://reguler.zenziva.net/apps/smsapi.php";
		
		$curlHandle = curl_init();
		
		curl_setopt($curlHandle, CURLOPT_URL, $url);
		
		$telepon = $nomorhp;
	
		curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
		curl_setopt($curlHandle, CURLOPT_HEADER, 0);
		curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
		curl_setopt($curlHandle, CURLOPT_POST, 1);
		$results = curl_exec($curlHandle);
		curl_close($curlHandle);
		
		//echo $results;
		//+6285782842718 0 Success 1109
	}
	else 
	{
		if($mac!='')
		{
			echo "<div class='my-block'><font color='white'><h2>Maaf $nama pendaftaran gagal, karena nomor HP atau Perangkat anda sudah terdaftar.</h2><h3>Jika belum ada SMS masuk harap sabar menunggu</h3></font>";
			echo "</br></br><a href='http://hotspot.loveforall.id'><font color='white'>[Kembali ke Halaman Login]</font></a></div>";
		}
		else
		{
			echo "<div class='my-block'><font color='white'><h2>Maaf pendaftaran ini hanya bisa dilakukan di perangkat yang terhubung Hotspot Ahmadiyah</h2><h3>Lakukan pendaftaran di titik hotspot @loveforall.id</h3></font>";
			echo "</br></br><a href='http://hotspot.loveforall.id'><font color='white'>[Kembali ke Halaman Login]</font></a></div>";
		}
	}
}

mysql_close();

echo "</html>";




?>

