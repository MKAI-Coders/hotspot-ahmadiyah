<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
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
		<li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
  </div>
</header>

<div class="content">
  <h1>Hotspot Ahmadiyah</h1>
  <p>Halaman Administrator untuk Admin</p>
  </br>
  <hr>
  </br>
  <h3><?php echo "Selamat Datang, ".$_SESSION['username']; ?></h3>
  
  
  
</div>

</body>
</html>