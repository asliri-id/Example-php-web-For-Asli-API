<?php

//get post gestureset acak
$gesture = $_POST['gestureset'];
$postdata['gestures_set'] = $gesture;

//melakukan perulangan sebanyak 8 kali, untuk mendapatkan 8 foto acak lalu memasukannya kedalam param postdata
for ($i=0; $i < 8; $i++) { 
  
  $tmp_name = "$i.jpeg";
  $postdata["file[$i]"] = curl_file_create($tmp_name);
}
 
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
  CURLOPT_POSTFIELDS => $postdata,
  CURLOPT_HTTPHEADER => array(
    //ganti dengan token anda
    "token: replace with your token here",
    'Content-Type: multipart/form-data'
  ),
));
$response = curl_exec($curl);
curl_close($curl);

//uncomment untuk kebutuhan developement
// $response = '{"timestamp": 1618895688,"status": 200,"errors": {},"data": {"passed": true}}';
echo $response;


?>
