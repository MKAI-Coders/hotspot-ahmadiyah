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
/*
$ip =   "10.200.98.16";
exec("ping -c 1 $ip", $output, $status);
//print_r($output);
if ($status == 0)

echo "Ping successful!";

else

echo "Ping unsuccessful!";
*/

// Include or require the class file.
require_once '../detectdevice/detect.php';

// Any mobile device (phones or tablets).

if (Detect::isMobile()) {

}

// Gets the device type ('Computer', 'Phone' or 'Tablet').
echo Detect::deviceType();

// Get the name & version of operating system.
echo Detect::os();

// Get the name & version of browser.
echo Detect::browser();


//https://www.waboxapp.com

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://www.waboxapp.com/api/send/chat"); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($ch, CURLOPT_POST, 1); 
//token
//uid
//to
curl_setopt($ch, CURLOPT_POSTFIELDS, "token=8512fa7413cffd9262b3b715fcab1fd15a1918ca71d99&uid=6285782842718&to=6281318093845&custom_uid=msg-1775&text=Assalamualaikum"); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch, CURLOPT_MAXREDIRS, 5); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_TIMEOUT, 20); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 25); 

$response = curl_exec($ch); 
$info = curl_getinfo($ch); 
curl_close ($ch);

echo "</br>";
echo $response;
echo "</br>";
echo $info;


?>     