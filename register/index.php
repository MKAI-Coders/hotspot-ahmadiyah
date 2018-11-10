<?php
	
	session_start();
	if(isset($_POST) & count($_POST)) 
	{
		$_SESSION['post'] = $_POST;
	}
	
	if(isset($_SESSION['post']) && count($_SESSION['post'])) 
	{
		$_POST = $_SESSION['post']; 
		
	}
	
    $mac=$_POST['mac'];
    $identity=$_POST['identity'];
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Internet Gratis Hotspot</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/validate.js"></script>
	
	<script>
function validateForm() {
	var nama = document.forms["register_form"]["nama"].value;
	var nomorhp = document.forms["register_form"]["nomorhp"].value;
	if (!isNaN(nama)) {
        alert("Nama tidak valid, harusnya isi hanya huruf saja");
        return false;
    }
	else if(nama.length<4)
	{
		alert("Nama tidak valid, terlalu pendek");
        return false;
	}
	else if (isNaN(nomorhp)) 
	{
		alert("Nomor HP tidak valid, harus dalam angka dan format 081XXXXXXX atau +628XXXXXXX");
		return false;
	}
	else if(nomorhp.length<9)
	{
		alert("Nomor HP tidak valid, digit terlalu pendek");
		return false;
	}
}
</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	 body {
		background-image: url("img/bg_al-islam.gif");
		background-color: #cccccc;
	}
	
	</style>
  </head>

  <body>
  

 
    <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
	  
	  <center><img src="img/bismillah2.png" style="width:100px;height:60px;"></center>
	  
        <form name ="register_form" class="form-signin" role="form" action="process.php" method="POST" onsubmit="return validateForm()">
		
          <h3 class="form-signin-heading" style="color:white"><center>Mendaftar Internet Gratis</center></h3>
		  <center><small><marquee><p style="color:white">PIN Code dikirimkan melalui SMS</p></marquee></small></center>
		  
          <input type="text" name="nama" class="form-control username input-top" placeholder="Nama" required autofocus>
          <input type="text" name="nomorhp" class="form-control password input-bottom" placeholder="Nomor Handphone"  onkeypress='validate(event)' required>
           
		   
		   <input type="hidden" name="mac" value="<?php echo $mac; ?>">
		   <input type="hidden" name="identity" value="<?php echo $identity; ?>">
		   
          <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
		  
        </form>
		

		<hr>
		<center><b><i style="color:white">Assalamu'alaikum wr. wb.</i></b></center>
		</br>
		
<ol style="color:white">
<li>Wi-Fi Gratis ini mendukung penuh TRUST+™ Positif (Internet Sehat dan Aman) Program Pemerintah</li>
<li>Wi-Fi Gratis ini sebagai sarana sharing informasi dari Ahmadiyah kepada masyarakat, semata-mata untuk menampilkan cahaya Islam Damai di negeri tercinta Indonesia</li>
<li>Meluruskan informasi yang salah tentang Ahmadiyah terutama mengenai Syahadat, Kitab Suci dan Nabi Muhammad Rasulullah SAW yang dimuliakan. </li>
<li>Akses Internet Gratis berlaku 1 jam/hari, Silahkan dimanfaatkan sebaik-baiknya. </li>

</ul>
</br>
<i style="color:white">Jazakumullah Ahsanal Jaza</i>
      </div>
    </div>
	
    </div> <!-- /container -->
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
					<?php 
					
					//library detectdevice
					$conn = mysql_connect("localhost","root","mkai");
	
					if(!$conn ) {
						die('Could not connect: ' . mysql_error());
					}
					
					mysql_select_db('khuddam_wifi');
					
					$username_sql = mysql_real_escape_string($mac);
					$query	= "select * from new_user where mac='$username_sql'";
					$retval = mysql_query($query, $conn);
					$username_count = mysql_num_rows($retval);
					
					$getname='';
					if($username_count > 0 && $mac!='')
					{
						while ($data = mysql_fetch_array($retval)) {
							$getname = $data['nama'];
						}
					}
					
					//record traffic
					if($identity != '')
					{
						require_once '../detectdevice/detect.php';
						
						$devicetype = Detect::deviceType();
						$os  = Detect::os();
						$browser = Detect::browser();
						
						$query =  "INSERT INTO view_register_user(mac,identity,devicetype,os,browser,nama) VALUES ('$mac','$identity','$devicetype','$os','$browser','$getname')";
						mysql_query($query,$conn);
					}	
				?>

  </body>
</html>