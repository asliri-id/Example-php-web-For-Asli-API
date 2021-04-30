<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  //ganti dengan url anda
  CURLOPT_URL => "https://api.asliri.id:8443/replacewithyoururl",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($_POST),
  CURLOPT_HTTPHEADER => array(
    //ganti dengan token anda
    "token: replace with your token here",
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);
curl_close($curl);


//uncomment untuk kebutuhan developement
// $response = '{"timestamp": 1618892899,"status": 200,"errors": {"identity_photo": "invalid"},"data": {"name": true,"birthdate": true,"birthplace": true,"address": "JL S*T* S*L*","selfie_photo": 79.1}}';

echo $response;
?>