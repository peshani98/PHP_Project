<?php
$User_name ="user"; //Your Username
$Api_key = "XXXXXXXXXXXX"; //Your API Key
$Gateway_type = "1"; //Define Economy Gateway
$Country_code = "94"; //Country Code
$Number = "71XXXXXXXX"; //Mobile Number Without 0
$message = "Test Message"; //Your Message 
$content_type = "Promotional"; //Promotional Or Transactional 
								
$data = array(
"user_name" => $User_name,
"api_key" => $Api_key,
"gateway_type" => $Gateway_type,
"country_code" => $Country_code,
"number" => $Number,
"content_type" => $content_type,
"message" => $message
);
$data_string = json_encode($data);

$ch = curl_init('https://gateway.quicksms.top/post/send-sms/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'Content-Length: ' . strlen($data_string))
);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
								
//Execute Post
$result = curl_exec($ch);
								
//Close Connection
curl_close($ch);
								
echo $result;
?>