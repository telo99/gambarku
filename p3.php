<pre>
user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36

<?php

$data=curlpost("https://www.vidio.com/live/204/tokens");
echo $data;

$json=json_decode($data,true);
//var_dump($json);
$token=$json['hls_url'];
echo "<br>$token<p>";
$belah=explode("/live/",$token);


$data2=curlget($token);
$data2=str_replace("204","17252",str_replace("/hls",$belah[0]."/hls",$data2));
echo $data2;


function curlpost($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_NOBODY, true);
$headers = [
'accept: */*',
'accept-language: en-US,en;q=0.9',
'baggage: sentry-environment=production,sentry-release=5a6ecfead70a35c44eb274b79589b9b27ee41813,sentry-public_key=2289b56bd44c4069b1eb457dbcc9c6c9,sentry-trace_id=b8199f284dcd478ca0b174f328680b5b,sentry-sample_rate=0,sentry-sampled=false',
'content-length: 0',
'cookie: ahoy_visitor=bc4b383f-cec9-4838-bc82-b37fab43dee1; ahoy_visit=8c6c5106-7ab4-4b51-a5a9-9d6f18b5194b; country_id=ID',
'origin: https://www.vidio.com',
'priority: u=1, i',
'referer: https://www.vidio.com/live/204-sctv',
'sec-ch-ua: "Brave";v="125", "Chromium";v="125", "Not.A/Brand";v="24"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'sec-gpc: 1',
'sentry-trace: b8199f284dcd478ca0b174f328680b5b-8cbb841157fcd770-0',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);
$data=curl_exec($ch);
curl_close($ch);
return $data;
}


function curlget($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_NOBODY, true);
$headers = [
'accept: */*',
'accept-language: en-US,en;q=0.8',
'origin: https://www.vidio.com',
'priority: u=1, i',
'referer: https://www.vidio.com/',
'sec-ch-ua: "Brave";v="125", "Chromium";v="125", "Not.A/Brand";v="24"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: cross-site',
'sec-gpc: 1',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);
$data=curl_exec($ch);
curl_close($ch);
return $data;
}
function ada($haystack, $needle) {
return $needle !== '' && mb_strpos($haystack, $needle) !== false;
}
function antara($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
