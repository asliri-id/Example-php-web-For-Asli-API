<?php
$clientname = $_POST['clientname'];
$clienttoken = $_POST['clienttoken'];

$url = "https://api.asliri.id:8443/".$clientname."/verify_profesional";

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($_POST),
  CURLOPT_HTTPHEADER => array(
    "token: ".$clienttoken,
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);


//uncomment untuk kebutuhan developement
// $response = '{"timestamp": 1618892899,"status": 200,"errors": {"identity_photo": "invalid"},"data": {"name": true,"birthdate": true,"birthplace": true,"address": "JL S*T* S*L*","selfie_photo": 79.1}}';

echo $response;
?>