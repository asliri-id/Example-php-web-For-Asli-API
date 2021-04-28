<?php
$gesture = $_POST['gestureset'];
$postdata['gestures_set'] = $gesture;

// $postdata['gestures_set'] = '5';

for ($i=0; $i < 8; $i++) { 
  
  $tmp_name = "$i.jpeg";
  $postdata["file[$i]"] = curl_file_create($tmp_name);
}
 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.asliri.id:8443/replacewithyoururl",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $postdata,
  CURLOPT_HTTPHEADER => array(
    "token: here your token",
    'Content-Type: multipart/form-data'
  ),
));
$response = curl_exec($curl);
curl_close($curl);

// $response = '{"timestamp": 1618895688,"status": 200,"errors": {},"data": {"passed": true}}';
echo $response;


?>
