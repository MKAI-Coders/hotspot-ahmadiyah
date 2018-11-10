<?php
/*
$userkey="vj17mf"; // userkey lihat di zenziva $userkey="vj17mf";
$passkey="mahmudah"; // set passkey di zenziva

$url = "https://reguler.zenziva.net/apps/smsapibalance.php";
$curlHandle = curl_init();
curl_setopt($curlHandle, CURLOPT_URL, $url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey);
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
curl_setopt($curlHandle, CURLOPT_POST, 1);
$results = curl_exec($curlHandle);
curl_close($curlHandle);

echo $results;
*/

echo "<h2>Client Monitoring</h2>";

echo "Client 10.200.98.13 (Mesjid Mahmudah - Gondrong) :  ";
$ip =   "10.200.98.13";
exec("timeout 0.5 ping -c 1 -s 1 $ip", $output, $status);
if ($status == 0)
	echo "RUNNING";
else
	echo "OFF";

echo "</br>";

echo "Client 10.200.98.14 (Mesjid Asy-Syifa - Jatinangor) : ";
$ip =   "10.200.98.14";
exec("timeout 0.5 ping -c 1 -s 1 $ip", $output, $status);
if ($status == 0)
echo "RUNNING";
else
echo "OFF";
echo "</br>";

echo "Client 10.200.98.16 (Mesjid Al-Hidayah - Kebayoran): ";
$ip =   "10.200.98.16";
exec("timeout 0.5 ping -c 1 -s 1 $ip", $output, $status);
if ($status == 0)
echo "RUNNING";
else
echo "OFF";
echo "</br>";

echo "Client 10.200.98.17 (Mesjid An-Nur - Tangerang): ";
$ip =   "10.200.98.17";
exec("timeout 0.5 ping -c 1 -s 1 $ip", $output, $status);
if ($status == 0)
echo "RUNNING";
else
echo "OFF";
echo "</br>";

echo "Client 10.200.98.18 (Mesjid Al-Fadhl - Bogor): ";
$ip =   "10.200.98.18";
exec("timeout 0.5 ping -c 1 -s 1 $ip", $output, $status);
if ($status == 0)
echo "RUNNING";
else
echo "OFF";
echo "</br>";

echo "Client 10.200.98.20 : ";
echo "</br>";

echo "Client 10.200.98.21 (Mesjid Mubarak - Tambun): ";
$ip =   "10.200.98.21";
exec("timeout 0.5 ping -c 1 -s 1 $ip", $output, $status);
if ($status == 0)
echo "RUNNING";
else
echo "OFF";
echo "</br>";

echo "Client 10.200.98.22 : ";
echo "</br>";
echo "Client 10.200.98.23 : ";
echo "</br>";

echo "----------------------";

echo "</br>";

echo "Client 10.200.98.15 (Testing 1 -  Assaf Rahman): ";
$ip =   "10.200.98.15";
exec("timeout 0.5 ping -c 1 -s 1 $ip", $output, $status);
if ($status == 0)
echo "RUNNING";
else
echo "OFF";
echo "</br>";

echo "Client 10.200.98.19 (Testing 2 - Saripudin): ";
$ip =   "10.200.98.19";
exec("timeout 0.5 ping -c 1 -s 1 $ip", $output, $status);
if ($status == 0)
echo "RUNNING";
else
echo "OFF";
echo "</br>";


/*
	$conn = mysql_connect("localhost","root","mkai");
	
	if(!$conn ) {
		die('Could not connect: ' . mysql_error());
	}
	
	$mac = '18:89:5B:88:91:8A';
	
	mysql_select_db('khuddam_wifi');
	
	$username_sql = mysql_real_escape_string($mac);
	$query	= "select * from new_user where mac='$username_sql'";
	$retval = mysql_query($query, $conn);
	$username_count = mysql_num_rows($retval);
	
	if($username_count > 0 && $username_count!='')
	{
		echo $username_count;
		while ($data = mysql_fetch_array($retval)) {
			echo $data['pincode'];
		}
	}
*/
?>