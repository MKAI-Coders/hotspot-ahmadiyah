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
	
	//$mac='6C-88-14-1F-DC-A8';
	//$ip='10.98.200.13';
    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $trial=$_POST['trial'];
    $loginby=$_POST['login-by'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
    $identity=$_POST['identity'];
	//$identity='wifimkai04';
    $bytesinnice=$_POST['bytes-in-nice'];
    $bytesoutnice=$_POST['bytes-out-nice'];
    $sessiontimeleft=$_POST['session-time-left'];
    $uptime=$_POST['uptime'];
    $refreshtimeout=$_POST['refresh-timeout'];   
    $linkstatus=$_POST['link-status'];  
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>LoveForAll.ID Hotspot | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom-panel.css" rel="stylesheet">

</head>
<body>


<div id="wrap">

	<div class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
		    <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Beranda</a></li>
					<li><a href="links.php">Akses Gratis</a></li>
					<li class="active"><a href="tentang.php">Tentang</a></li>
                    <li><a href="kontak.php">Hubungi kami</a></li>
                </ul>
            </div>
        </div>
    </div>
    

    <div id="bottom-menu">
        <div class="container">
		
        </div>
		
		
    </div>
	
	
		

  

    <div class="container">
		
		<center><h3><b><i style="color:black">Assalamu'alaikum wr. wb.</i></b></h3></center>
		</br>
		
		<ol style="color:black">
		<li>Wi-Fi Gratis ini mendukung penuh TRUST+™ Positif (Internet Sehat dan Aman) Program Pemerintah</li>
		<li>Wi-Fi Gratis ini sebagai sarana sharing informasi dari <a href='http://ahmadiyah.id' target='_blank'>Islam Ahmadiyah</a> kepada masyarakat, semata-mata untuk menampilkan cahaya Islam Damai di negeri tercinta Indonesia</li>
		<li>Meluruskan informasi yang salah tentang <a href='http://ahmadiyah.id' target='_blank'>Islam Ahmadiyah</a> terutama mengenai Syahadat, Kitab Suci dan Nabi yang dimuliakan. </li>
		<li>Akses Internet Gratis berlaku 1 hari, Silahkan dimanfaatkan sebaik-baiknya. </li>
		<li>Jika lupa Kode PIN atau ingin bertanya lanjut mengenai Wi-Fi ini bisa menghubungi kontak di menu <a href="kontak.php"><b>Hubungi Kami</b></a> </li>

		</ul>
		</br>
		<i style="color:black">Jazakumullah Ahsanal Jaza</i>	
	
    </div>
</div>

<div id="footer">
    <div class="container">
        <p class="text-muted"><a href="http://ahmadiyah.id/">Ahmadiyah Hotspot | <?php echo $identity; ?></a></p>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>





</body>
</html>

                     