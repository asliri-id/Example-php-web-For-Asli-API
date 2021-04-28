<?php
// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://api.asliri.id:8443/internal/verify_profesional",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => json_encode($_POST),
//   CURLOPT_HTTPHEADER => array(
//     "token: aaa2fc4a-c20b-4a49-b72a-8852434b76e6",
//     "Content-Type: application/json"
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);



$response = '{"timestamp": 1618892899,"status": 200,"errors": {"identity_photo": "invalid"},"data": {"name": true,"birthdate": true,"birthplace": true,"address": "JL S*T* S*L*","selfie_photo": 79.1}}';

echo $response;
?>