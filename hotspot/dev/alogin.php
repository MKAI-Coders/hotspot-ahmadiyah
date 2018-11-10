<?php
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
    <title>Ahmadiyah Hotspot | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta http-equiv="refresh" content="3;url=http://www.google.com" />
    
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom-panel.css" rel="stylesheet">
</head>
<body>

<div id="wrap">

    <div id="bottom-menu">
        <div class="container">
		
           
        </div>
    </div>

    <div class="container">
        <div class="col-md-6 col-sm-12">        
            <div class="row">
                <div class="alert alert-success">
                    Anda telah login dengan sukses, silahkan akses internet gratis. Sisa pemakaian internet hari ini 
					<?php 
					
						echo $sessiontimeleft;
						
						$nomorhp = '';
						
						if($mac!='')
						{
							$conn = mysql_connect("localhost","root","mkai");
		
							mysql_select_db('khuddam_wifi');

							$query =  "INSERT INTO login_user(mac,identity) VALUES ('$mac','$identity')";
							mysql_query($query,$conn);
							
							$sql2 = "SELECT * FROM new_user WHERE mac='$mac'";
							$retval2 = mysql_query($sql2);
							$row2 = mysql_fetch_array($retval2);
							
							$nomorhp = $row2['nomorhp'];
						}

						//Isi pesan, kutipan khutbah Khalifah
						$message[0]= "Kita harus senantiasa berkata benar kendati apa yang kita katakan akan merugikan diri kita, orang tua kita, ataupun kerabat dekat kita sendiri - loveforall.id";
						$message[1]= "Kita harus terus meningkatkan usaha-usaha kita untuk menolong orang-orang yang lemah dan membutuhkan - loveforall.id";
						$message[2]= "Seorang mukmin harus menjauhi segala bentuk kesombongan, baik melalui mata, lidah, kepala, tangan, maupun kaki - loveforall.id";
						$message[3]= "Alih-alih menghukum, para orang tua justru harus banyak berdoa untuk kebaikan anak-anak mereka karena doa orang tua secara khusus diijabah oleh Tuhan - loveforall.id";
						$message[4]= "Kita tidak akan berhasil meraih kebaikan yang sempurna sampai kita mengorbankan apa yang kita cintai untuk keperluan agama - loveforall.id";
						$message[5]= "Telah menjadi sebuah ketetapan dalam Islam bahwa satu amal baik akan melahirkan amal-amal baik yang lain - loveforall.id";
						$message[6]= "Setiap orang harus memiliki keyakinan yang kokoh bahwa setiap dosa yang ia lakukan selalu berada dalam penglihatan Allah dan Dia pun akan membalasnya - loveforall.id";
						$message[7]= "Kita harus senantiasa mengingat bahwa agama merupakan urusan hati seseorang - loveforall.id";
						$message[8]= "Allah Taala senang dengan amal-amal yang baik dan Dia pun ingin agar setiap orang bertenggang rasa kepada sesama makhluk-Nya - loveforall.id";
						$message[9]= "Akar dari segala kebajikan adalah iman kepada Allah Taala sehingga timbul perubahan dalam akhlak manusia - loveforall.id";

						//KIRIM SMS tiap login
						
						$userkey="vj17mf"; // userkey lihat di zenziva $userkey="vj17mf";
						$passkey="mahmudah"; // set passkey di zenziva
						
						/*
						$url = "https://reguler.zenziva.net/apps/smsapi.php";
						
						$curlHandle = curl_init();
						
						curl_setopt($curlHandle, CURLOPT_URL, $url);
						
						$telepon = $nomorhp;
					
						curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message[rand(0,9)]));
						curl_setopt($curlHandle, CURLOPT_HEADER, 0);
						curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
						curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
						curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
						curl_setopt($curlHandle, CURLOPT_POST, 1);
						$results = curl_exec($curlHandle);
						curl_close($curlHandle);
						*/
					
					
					?>
                </div>
            </div>
        </div>
		
		<div class="col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="card hovercard">
					
                        <div class="cardheader">
                        </div>
                        <div class="avatar">
                        <img alt="" src="img/alislam-logo.png">
                        </div>
                        <div class="info">
                        <div class="title">
                        <a href="http://loveforall.id/">Ahmadiyah Free Hotspot</a>
                        </div>
                        <div class="desc">Berbagi Internet untuk Masyarakat</br></br></div>
							
                        </div>
							
                    </div>

                </div>
            </div>
        </div>

        
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
