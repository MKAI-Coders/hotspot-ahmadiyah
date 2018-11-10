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
					<li><a href="tentang.php">Tentang</a></li>
                    <li class="active"><a href="kontak.php">Hubungi kami</a></li>
                </ul>
            </div>
        </div>
    </div>
    

    <div id="bottom-menu">
        <div class="container">
		
        </div>
		
		
    </div>
	
	
		

  

    <div class="container">
		
		<b><h3><i style="color:black">Hubungi Kami :</i></h3></b>
		</br>
		
		
		<?php
		
			$conn = mysql_connect("localhost","root","mkai");
				
			mysql_select_db('khuddam_wifi');
						
			//$iden = mysql_real_escape_string($identity);
			$query	= "select * from data_client where identity='$identity'";
			$retval = mysql_query($query, $conn);
			
			$data = mysql_fetch_array($retval);
			
			$getnama = $data['nama'];
			$getalamat = $data['alamat'];
			$getnomorhp = $data['nomorhp'];
			
			echo "</br><b>$getnama</b></br></br><b>Alamat : </b></br>$getalamat</br></br><b>Nomor HP : </b></br>$getnomorhp</br>";
			
					
		?>
		
		
		</br>
		
	
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

                     