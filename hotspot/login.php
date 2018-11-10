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


	
	<style>
// STYLE MENU NAVIGATION
div {
font-size: 2em;
}

.hide {
   display: none;
}

body {
    font-family: "Lato", sans-serif;
    transition: background-color .1s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 22px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
} 

// STYLE SLIDE IMAGE

* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 6s;
  animation-name: fade;
  animation-duration: 6s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

</style>

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
                    <li class="active"><a href="login.php">Beranda</a></li>
					<li><a href="links.php">Akses Gratis</a></li>
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
	
	<center><b>Cinta untuk Semua, Kebencian Tidak untuk Siapapun</b> </br><small>"Islam sejati membawa ajaran yang penuh dengan kedamaian, cinta, dan kasih sayang"</small>
	</br>
	</br>
	<b><p id="textrotator">(Loading...)</p></b>
	
	</center>
	
		<div class="col-md-8 col-sm-12">
            <div class="panel panel-default">
			
			
			
			<div class="slideshow-container">
			
			<!--
				<div class="mySlides">
				  
				  <img src='<?php $acak = rand(1,5); echo 'dev/Image/random/pic'.$acak.".jpg";?>' style="width:60%">
				  <div class="text" ></div>
				</div>
				-->
				<!--
				<div class="mySlides fade">
				  
				  <center>
				  <img src='<?php $acak = rand(1,6); echo 'dev/Image/random/pic'.$acak.".jpg";?>' style="width:100%;">
				  </center>
				  <div class="text" ></div>
				</div>
				-->
				
				<div class="mySlides fade">
				  <img src="Image/kerjanyataahmadiyah.jpg" style="width:100%">
				  <div class="text" ></div>
				</div>
				
				<div class="mySlides fade">
				  <img src="Image/slider-allah.jpg" style="width:100%">
				  <div class="text" ></div>
				</div>
				
				<div class="mySlides fade">
				  <img src="Image/gbr13.jpg" style="width:100%">
				  <div class="text" ></div>
				</div>
	
				<div class="mySlides fade">
				  <img src="Image/gbr12.jpg" style="width:100%">
				  <div class="text" >Jemaat Ahmadiyah memperoleh Rekor Pendonor Mata Terbanyak dari MURI</div>
				</div>
				
				<div class="mySlides fade">
				  <img src="Image/gbr11.jpg" style="width:100%">
				  <div class="text" >Presiden RI Jokowi ucapkan "Ied Mubarak" pada Pemuda Ahmadiyah</div>
				</div>

				<div class="mySlides fade">
				  <img src="Image/gbr2.jpg" style="width:100%">
				  <div class="text">Kegiatan Donor Darah yang dilakukan Pemuda Ahmadiyah di Kantor PMI Tangerang</div>
				</div>



				<div class="mySlides fade">
				  <img src="Image/gbr5.jpg" style="width:100%">
				  <div class="text">Kegiatan Bakti Sosial yang di adakan di Kp Kosong, Panunggangan Pusat</div>
				</div>

				<div class="mySlides fade">
				  <img src="Image/gbr6.jpg" style="width:100%">
				  <div class="text" >MKAI dan GP Ansor Tasikmalaya Buka Posko Mudik</div>
				</div>


				<div class="mySlides fade">
				  <img src="Image/gbr8.jpg" style="width:100%">
				  <div class="text" >Jelang Ramadan, DHN dan Warga Ahmadi Cirebon Gelar Pengobatan Massal</div>
				</div>
				
			
				</div>
				
				<div style="text-align:center;display: none">

				  <span class="dot" onclick="currentSlide(1)"></span> 
				  
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span>
				  <span class="dot" onclick="currentSlide(4)"></span>
				  <span class="dot" onclick="currentSlide(5)"></span>
				  <span class="dot" onclick="currentSlide(6)"></span> 
				  <span class="dot" onclick="currentSlide(7)"></span> 
				  <span class="dot" onclick="currentSlide(8)"></span>
				  <span class="dot" onclick="currentSlide(9)"></span>
				  
				 
				</div>

			 
            </div>
        </div>
		
        <div class="col-md-4 col-sm-12">
        
            <div class="row">
			
                <?php if($error) : ?>
                    <div class="alert alert-danger">
					
					<?php 
						
						//jika user error dalam input pin code
						//echo $error; 
						
						$conn = mysql_connect("localhost","root","mkai");
	
						if(!$conn ) {
							die('Could not connect: ' . mysql_error());
						}
						
						mysql_select_db('khuddam_wifi');
						
						$username_sql = mysql_real_escape_string($mac);
						$query	= "select * from new_user where mac='$username_sql'";
						$retval = mysql_query($query, $conn);
						$username_count = mysql_num_rows($retval);
						
						$getname = '';
						if($username_count > 0 && $mac!='')
						{
							while ($data = mysql_fetch_array($retval)) {
								$getname = $data['nama'];
							}
						}
						
						$query =  "INSERT INTO error_user(mac,identity,nama) VALUES ('$mac','$identity','$getname')";
						mysql_query($query,$conn);
						
						if($error == "Your maximum daily usage time has been reached")
							echo "Masa waktu penggunaan harian anda sudah habis, silakan coba besok lagi";
						else if ($getname == '')
							echo "Maaf, perangkat Anda belum terdaftar";
						else
							echo $error; 
						
						
						
					?>
					
					</div>
                <?php endif; ?>
				

                <div class="alert alert-info">
				
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
					
					$sql2 = "SELECT * FROM user_enable WHERE mac='$mac'";
					$retval2 = mysql_query($sql2);
					$row2 = mysql_fetch_array($retval2);
					
					$disable_status = $row2['disable_status'];
					
					$getpincode='';
					$getname='';
					if($username_count > 0 && $mac!='')
					{
						while ($data = mysql_fetch_array($retval)) {
							$getpincode = $data['pincode'];
							$getname = $data['nama'];
						}
						
						if($disable_status == 0)
							echo "Assalamu'alaikum $getname</br>Perangkat anda sudah terdaftar. Gunakan Kode PIN yang dikirimkan melalui SMS. Jika Belum mendapat SMS kontak <b>081220275051 (Admin Hotspot)</b></a> </br></br> Silahkan masukkan Kode PIN untuk akses Internet"; //dengan kode PIN $getpincode</br></br>";
						else
							echo "Assalamu'alaikum $getname</br>Anda sementara tidak bisa mengakses internet, hubungi <a href='http://loveforall.id/hotspot/kontak.php'><b>Admin</b></a> untuk dapat login kembali</br></br> Terima kasih";
					}
					else
					{
						echo "Silahkan masukkan Kode PIN untuk akses Internet";
					}
					
					//untuk dapat login atau tidak
					
					
					
					//record traffic
					if($identity != '')
					{
						require_once '../detectdevice/detect.php';
						
						$devicetype = Detect::deviceType();
						$os  = Detect::os();
						$browser = Detect::browser();
						
						$query =  "INSERT INTO view_user(mac,identity,devicetype,os,browser,nama) VALUES ('$mac','$identity','$devicetype','$os','$browser','$getname')";
						mysql_query($query,$conn);
					}	
					
					//
					
					//GET article
						
					$sql	= "SELECT * FROM article_db ORDER BY id DESC";
					$retval = mysql_query($sql);
					
					$totaldata = mysql_num_rows($retval);
					
					$counter = 0;
					$judul = array("", "", "");	
					$article_id = array("", "", "");
					
					while($row = mysql_fetch_array($retval)) 
					{
						$judul[$counter] = $row['judul'];
						$article_id[$counter] = $totaldata;
						
						//echo $judul[$counter];
						
						if($counter==2)
							break;
						
						$counter++;
						$totaldata--;
					}
					
				?>
				
				
				
				
				</div>
                <?php if($trial == 'yes') : ?> 
                    <div class="alert alert-info">
					Mau mencoba tanpa mendaftar? <a href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&amp;username=T-<?php echo $macesc; ?>">Klik di sini</a>.
                    </div>
                <?php endif; ?>
            </div>

			
			<?php 
			
			if($disable_status == 0) : 
			
			?> 
			

            <div class="row">            
                <div class="panel panel-default">
                    
                    <div class="panel-body">

                        <form id="loginForm" class="form-horizontal" role="form" action="<?php echo $linkloginonly; ?>" method="post">
                            
							<input type="hidden" name="dst" value="<?php echo $linkorig; ?>"/>
							
                            <input type="hidden" name="popup" value="true"/>
							
						    <input type="hidden" name="username" value="<?php echo $mac; ?>"/>
							
							<div class="form-group">
                               
							   

                                <div class="col-sm-12">
                                    <input type="text" class="form-control input-lg" id="inputPassword" name="password"
                                           placeholder="Kode PIN" required>
                                </div>
								
                            </div>
							 <div class="form-group">
							 <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">OK</button>
									</br>
                                </div>
							</div>
                           
                        </form>
						  <div class="col-sm-12">
                               
								<form name="register" action="../register/index.php" method="post">
								<input type="hidden" name="mac" value="<?php echo $mac; ?>">
								<input type="hidden" name="identity" value="<?php echo $identity; ?>">
						
								Belum memiliki Kode PIN? klik <input type="submit" value="Daftar Internet Gratis" class="btn btn-primary navbar-inverse">
							</form>
						</div>
						
                    </div>
					
                </div>
				
            </div>
			<?php endif; ?>
			
			
        </div>

  
		
    </div>
</div>

<div id="footer">
    <div class="container">
        <p class="text-muted"><a href="http://ahmadiyah.id/">loveforall.id | <?php echo $identity; ?></a></p>
    </div>
</div>

<script>

// SLIDE IMAGE ANIMATION

var slideIndex = 0;
rotateEvery(4);
showSlides();


function rotateEvery(sec)
{
	var Quotation = new Array()

	// QUOTATIONS
	//Quotation[0] = "<a href = 'article.php?no=1' target='_blank'><?php echo $judul[0]; ?> </a>";
	//Quotation[1] = "<a href = 'article.php?no=2' target='_blank'>  <?php echo $judul[1]; ?> </a>";
	//Quotation[2] = "<a href = 'article.php?no=3' target='_blank'> <?php echo $judul[2]; ?> </a>";
	
	Quotation[0] = "<a href = 'article.php?no=<?php echo $article_id[0]; ?>&mac=<?php echo $mac; ?>&identity=<?php echo $identity; ?>' target='_blank'> <?php echo $judul[0]; ?> </a>";
	Quotation[1] = "<a href = 'article.php?no=<?php echo $article_id[1]; ?>&mac=<?php echo $mac; ?>&identity=<?php echo $identity; ?>' target='_blank'> <?php echo $judul[1]; ?> </a>";
	Quotation[2] = "<a href = 'article.php?no=<?php echo $article_id[2]; ?>&mac=<?php echo $mac; ?>&identity=<?php echo $identity; ?>' target='_blank'> <?php echo $judul[2]; ?> </a>";
	
	//Quotation[3] = "<a href = 'article.php?no=4' target='_blank'> RajaPena | Benarkah Tuhan Tidak Ada? </a>"; 
	//Quotation[4] = "<a href = 'article.php?no=5' target='_blank'> RajaPena | Ahmadiyah dan Sumpah Pemuda </a>"; 

	var which = Math.round(Math.random()*(Quotation.length - 1));

	document.getElementById('textrotator').innerHTML = Quotation[which];
		
	setTimeout('rotateEvery('+sec+')', sec*1000);
}

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 6000); // Change image every 3 seconds
}

// MENU SIDE NAVIGATION

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}

</script>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<?php if($chapid) : ?> 
<script type="text/javascript" src="js/md5.js"></script>
<script type="text/javascript">
<!--
    function doLogin() {
    <?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
    document.sendin.username.value =  document.login.username.value;
    document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapchallenge; ?>');
    document.sendin.submit();
    return false;
    }
//-->
</script>
<?php endif; ?>

<script type="text/javascript">
  document.login.username.focus();
</script>


</body>
</html>

                     