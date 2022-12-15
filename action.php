<?php
$TEXT = $_POST['text'];
$API_KEY = 'APIキー';

$header = array(
	'Authorization: Bearer '.$API_KEY,
	'Content-type: application/json',
);

$params = json_encode(array(
	'prompt'		=> $TEXT,
	'model'			=> 'text-davinci-003',
	'temperature'	=> 0.7,
	'max_tokens'	=> 4000,
	'top_p'			=> 1.0,
	'frequency_penalty'	=> 0.8,
	'presence_penalty'	=> 0.0
));


$curl = curl_init('https://api.openai.com/v1/completions');
$options = array(
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER =>$header,
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_RETURNTRANSFER => true,
);
curl_setopt_array($curl, $options);
$response = curl_exec($curl);

$httpcode = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);

if (200 == $httpcode){
	$json_array = json_decode($response, true);
	$choices = $json_array['choices'];
	foreach($choices as $v){
		echo $v['text'].'<br />';
	}
}
?>