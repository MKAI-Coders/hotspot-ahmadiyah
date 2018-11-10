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
    <title>Ahmadiyah Hotspot | Session Status</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <?php if($error) : ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>
                <?php if($loginby == 'trial') : ?> 
                    <div class="alert alert-info">Welcome trial user!</div>
                <?php elseif($loginby != 'mac') : ?>    
                    <div class="alert alert-info">Welcome <?php echo $username; ?>!</div>
                <?php endif; ?>
            </div>        
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>IP address:</td>
                                <td><?php echo $ip; ?></td>
                            </tr>
                            <tr>
                                <td>bytes up/down</td>
                                <td><?php echo $bytesinnice; ?> / <?php echo $bytesoutnice; ?></td>
                            </tr>
                            <?php if($sessiontimeleft) : ?>
                            <tr>
                                <td>connected / left:</td>
                                <td><?php echo $uptime; ?> / <?php echo $sessiontimeleft; ?></td>
                            </tr>
                            <?php else: ?>
                            <tr>
                                <td>connected:</td>
                                <td><?php echo $uptime; ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if($refreshtimeout) : ?>
                            <tr>
                                <td>status refresh</td>
                                <td><?php echo $refreshtimeout; ?></td>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
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

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
