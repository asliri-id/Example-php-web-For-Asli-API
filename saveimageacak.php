<?php

	define('UPLOAD_DIR', '');
	$img = $_POST['imgBase64'];
	$imagename = $_POST['imagename'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . $imagename . '.jpeg';
	$success = file_put_contents($file, $data);
	//send request to ocr 

	print $success ? $file : 'Unable to save the file.';

?>