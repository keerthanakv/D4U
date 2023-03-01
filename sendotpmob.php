<?php
    $ph=$_POST['mb'];
    $otp= rand(10000,100000);
    $msg="OTP for mobile verification is $otp,Thank you for chooseing D4U!!!";
    
           $fields = array(
    "sender_id" => "D4U",
    "message" => "$msg",
    "route" => "v3",
    "numbers" => "$ph",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: sIGZpx4h9kXNQ6tJvcwoamSDMjR0ynb21YCFg8qzHeiBu7fTULjlobrMpzCXG36c8DhvQN2ueyA75dUw",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) 
{
  echo "cURL Error #:" . $err;
} 
else 
{
    echo$otp;
}