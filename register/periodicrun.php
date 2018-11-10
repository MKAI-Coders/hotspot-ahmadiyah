<?php

exec("timeout 0.8 ping -c 1 -s 1 10.200.98.13", $output, $status1);
exec("timeout 0.8 ping -c 1 -s 1 10.200.98.14", $output, $status2);
exec("timeout 0.8 ping -c 1 -s 1 10.200.98.16", $output, $status3);
exec("timeout 0.8 ping -c 1 -s 1 10.200.98.17", $output, $status4);
$status1=$status1?0:1;
$status2=$status2?0:1;
$status3=$status3?0:1;
$status4=$status4?0:1;
$conn = mysql_connect("localhost","root","mkai");	
mysql_select_db('client_monitor');
$query =  "INSERT INTO monitoringstatus(client1,client2,client3,client4) VALUES ('$status1','$status2','$status3','$status4')";
mysql_query($query,$conn);

?>