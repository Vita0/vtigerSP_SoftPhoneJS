<?php

$ip = '192.168.0.105';
$port = '8088';

$sip_number = '103';
$sip_password = '103pas';

$sip_settings = array ('server_ip'=>$ip, 'server_port'=>$port, 'sip_number'=>$sip_number, 'sip_password'=>$sip_password);
$data = json_encode($sip_settings);
echo $data;
error_log("here");
exit();


?>