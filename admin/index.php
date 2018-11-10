<html>
 <head>
  <title>Form Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <style>
   body
   {
    font-family:Calibri;
    margin:10px;
   }
   
   #form-login{
	   margin:auto;
	   width:300px;
	   padding:10px;
	   border:1px #ccc solid;
	   font-size:18px;
	   font-weight:bold;
	   color:#006faa ;
   }
   
   .inputan
   {
    padding:3px;
    font-family:Calibri;
    border:1px solid #ccc;
   }
   
   .tombol
   {
    padding:5px;
    background:#006faa ;
    color:#FFF;
    font-weight:bold;
    font-family:Calibri;
    font-size:15px;
    border:#eee 1px solid;
   }
   
   .error
   {
    color:#006faa ;
    font-size:11px;
   }
   
   
  </style>
 </head>
 <body>
 <form action="login.php" method="post" name="login">
  <div id="form-login">
      <center><h3>Hotspot Administrator</h3></center>
      <table border="0" cellpadding="4">
       <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username"  class="inputan"> </td>
       </tr>
       <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" class="inputan"></td>
       </tr>
       
       <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="login" value="Login" class="tombol"> </td>
       </tr>
      </table>
  </div>
  </form>
 </body>
</html>