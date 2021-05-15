<?php

$clientname = $_POST['clientname'];
$clienttoken = $_POST['clienttoken'];
$ktp_base64 = $_POST['ktp_image'];
$url = "https://api.asliri.id:8443/".$clientname."/ocr_extra";


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
// $response = '{"timestamp": 1615735850,"status": 200,"errors": {},"data": {"nik": "3329091003780012","nama": "AMAT FAOZI","tempat_lahir": "PEKALONGAN","tanggal_lahir": "10-03-1978","jenis_kelamin": "LAKI-LAKI","gol_darah": "-","alamat": "DUSUN KAUMAN","rt/rw": "2002/005","kelurahan/desa": "KESESI","kecamatan": "KESESI","agama": "ISLAM","status_perkawinan": "KAWIN","pekerjaan": "PEDAGANG","kewarganegaraan": "WNI","provinsi": "JAWA TENGAH","kota": "KABUPATEN PEKALONGAN"}}';

echo $response;
?>