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
					<li class="active"><a href="links.php">Akses Gratis</a></li>
					<li><a href="tentang.php">Tentang</a></li>
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
		
		Link-link di bawah ini dapat diakses secara gratis melalui <b>LoveForAll.ID Hotspot</b>
		</br><hr>
		<a href="http://www.alislam.org" target="_blank"><img src="Image/alislam.png" alt="alislam.org" style="width:350px;height:80px;border:0;"></a>
		
		<a href="http://ahmadiyah.id" target="_blank"><img src="Image/ahmadiyahid.png" alt="Ahmadiyah.ID" style="width:350px;height:100px;border:0;"></a>
		<hr>
		<a href="http://warta-ahmadiyah.org" target="_blank"><img src="Image/wartaahmadiyah.png" alt="WartaAhmadiyah.org" style="width:350px;height:100px;border:0;"></a>
		
		<a href="http://rajapena.org" target="_blank"><img src="Image/rajapena.png" alt="RajaPena.org" style="width:300px;height:120px;border:0;"></a>
		<hr>
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

                     