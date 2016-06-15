<?php

//$url = 'http://192.168.0.105/vtigercrm';
//$ip = from url
$ip = '192.168.0.105';
$port = '8088';

$session_id = $_POST["session_id"];

$sip_number = '103';


$sip_settings = array ('server_ip'=>$ip, 'server_port'=>$port, 'sip_number'=>$sip_number, 'session_id'=>$session_id);
$data = json_encode($sip_settings);
echo $data;
error_log("here");
exit();

?>
