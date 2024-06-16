<pre><?php
error_reporting(0);
$id=$_GET['id'];


$vbtv=curlpost('https://dce-frontoffice.imggaming.com/api/v2/token/refresh?','{"refreshToken":"eyJhbGciOiJSUzI1NiIsInB1ciI6IlJFRiIsInNpZyI6ImciLCJ0eXAiOiJKV1QiLCJ2IjozfQ.eyJhcCI6eyJhcG4iOiJhenVyZV92YnR2X3NzbyIsImFwdCI6Ik9QRU5JRF9DT05ORUNUIn0sImFwciI6Ik9QRU5JRF9DT05ORUNUIiwiYXVkIjoiZGNlLmZpdmIiLCJkZXYiOiJCUk9XU0VSIiwiZW52IjoicHJvZCIsImV4cCI6MTcyMzc1NTc0OSwiZ3VlIjpmYWxzZSwiaWF0IjoxNzE4NDk2MjYxLCJpc3MiOiJkY2UtaWQiLCJwcnQiOiJleUpyYVdRaU9pSm9ja1ptWVVGSlZYWmhNRUZoUWpCalQwRTVTVm8yZEVwVVNrOWFRV2hMT1ZaeFVuUlBaRUV0VWw5bklpd2lkbVZ5SWpvaU1TNHdJaXdpZW1sd0lqb2lSR1ZtYkdGMFpTSXNJbk5sY2lJNklqRXVNQ0o5LlJJWThkU1UyWl9OUEdwWlZpV3VxNkhsblFDcC1LT0NEYV92a1RKXzBqUzdOVmU2TUJCWElqalNrRVl2RkVnZ2ZkZC00VzNNRW1kZWZaX0FhTUlVUGh0NWI5aG5WMVRsVXppTVRpdGdKbmF4REhXMkFOX0ZqSkZmc3JuVXEwLWQxZDVaSG54Rjc0Ukh4R195TjY0REpJMmpoem5HRS1IZ3dnSmlzNjRlSDdyOWUwNlZhZmVVcXZlUXpGLWx4ekNiWmJ1T1dDcUJMU1Q2bFNqUjlGWHB2bTlmZVBsbFZ3N1Y0TDQ1a0Y5TFVmVzhiWHQtZ2dHN1VtOVlGMTVEbjFpUGFzY1VOZ3k2aDkxNFFLT3FYaVFGaWYxbkV5ZEtvbUxhNzYxOGliRFY0SHBtV08yVTZ3VWI4OGNDckRKeHgtYWNhS3dfV1VneXZTRy1waUdTdHRhejFNUS5nTDl0ak1XY0Z0TllJcmxYLjNndlY5Vl9HU3ZPZEdtT2hNaHRLZ3Z5N2tWV0dJTS1rRUNCRXBYeDc1b29sVUVDdUVLWU1RWkNjRWtMMFoydWZTbkZ5VEtBN0F5YWE5QVdaY2tQeDNGWktjeS14MmtWeWJoYlhpdFl6SVpxWDRHZi1YbDZLVUZiZS1rVzhqREgzdHl6NmxhZXZnWV94Q1owSE1qejk2MWFRS29Zb1hXM1ZxNXlLTG5tMFgtTE1pRWlWM0htcDk4bkg0R2xCVS1vTVRYY0xMdENUZXY0Q21pNnBhakF0RGtUb0YtUGVPcWw5b24taUxKMjExbkpjYWlScGtNX2UwTE5Wd2FjRTRKUzRheGpsTV92cGNiMFJRRTdTNndCaEtlVURrcmRBQld1dFRCVXpVMzFMRDNNb3U4X0hWY3EyZmVmaHI1bUM0OUdzSkhNQ0JpUXpGX2Z6UmZ6emtReDNtYTFJcElFb1VBcXlUbEJDRzQ5QTRoX2lCRmdNMEtOb3BUUDMzdm52amhGZWNRd2RPZFlqSDR6NEs2YUNFOFV0OGFFZkpoejBRcUJaMFhWcHBfeXZtZVdhUFF6S09mOFBjV2dSdWdnOW1wd2V5QVFVM3pVQkdDc2JacWJjYV9iTHJpS0lBX3d5YmZYLVhFbEtWRUVpUlJ0SVhyNGh4QWxmRW53Q3B0alR3dWY3a1FwZ21RZENZOVgtNWNKdjVYMk5DWkF0NzVLbXFqam5pQ0Y5M2hBV3ZLdi1tM1VxM2hxN1dGQng5NV9ZSmVLZEllZlEyR2dzZUNHU3lhWjczYWlRQkVJcUlzemVZU01uYmhkQ05sS3p6a24xMEhXX1JpajhtQlE4UXFwaHpHRlllMmFyRllrcnkzWnJsSHUwSHBFSFUwcXQ4dnkyQVhsbkJRVFp4TWN6X2cxQ0dpcmZFdW15MThDdGlBZU80LXVVUWlnRXVlMjJJUHVaVWQwNGJJTGhpSGFBZWdZc1dETEtjaHVOYWVKT2tCdlVEZXREOTlBLVdEZkNoa3FRWXFTQ1paNXVZVFVydUlWbkU3WU5YOU1LY3hWY0xHVTdPbHNQZkxvbVlKcVlQUEJOT2l4NUtxMHZkbFhBRlR6UTAtNmxCN3NYblU3aFo4WlZwcU9DLURkdW5OaEJ4UnNldTFjWjJsNUJaQ3hwTjM0M3lmU2V5OC0tYURSNnpxUE9hSHY1SXRybU9tT0pOUk94SmlBSWwwVF9OVmpPdE5KbC1VN2ItazlJWmxOVUNHN0c4ckJkbGg1SmVLQ0w0ZlJXNlhlem4tZGhwaDZ3cGoyekE5X0JQQTRiMWZ6QmZrNmhkRWlNQVM4a0RLQWh6TDdseEZiVEVDNzNPeVFPdmd3YTFrV3FKVnhBQkpoRzBFUEw2MzI5cUJ6VVlWRUM5MkthTmVrcTBLUUhuZUZNWFlzT2FUUkJmdkRLVXhWY2RnajQxQUZQTmV2b2l1VENoRUR5VkxDRURYbVlDNlE3bE84c1lidUoxY3FLcGV6ZkhtTWVORFZET2Q4TENudUYzQ1JyZjJ6R0tldUp1TG5jblpjYlFDSHlhQ2tMd0ZkbXRDSHctQS51LWdZMFJGVG1HTDV6bm4tX2pnSXl3Iiwic3ViIjoiYjl6QkhafGRiMzY0ODQ0LTQ5YzgtNGNlMC1iNzMzLTRkNjBhNjU4YzNmMyJ9.dDc6ehEMFWob2yq8_Q9FDin7oIxG6B450GO5UYQ8BKdhnNWkPwcSNYkCcMt7DkL3ly72qlCAwpYf_IOr2yE9BQX388MN4VLFzjMaP8FuoPrKW4D4NfZ06fAZiI20EIS1xrhCadDcCjZcGiqjiwR2HMz0Qv-RsbZ_7XqIg_0lBUc"}');
//echo htmlspecialchars($vbtv);

$token=antara($vbtv,'authorisationToken":"','"');

//echo "\n\n$token\n\n";
$data=curlget("https://dce-frontoffice.imggaming.com/api/v4/event/$id?displayGeoblockedLive=false&includePlaybackDetails=URL",$token);
$play=antara($data,'"playerUrlCallback":"','"');
//echo "$play\n\n";
//echo $data;
//echo "\n\n";

$data=curlget($play,$token);
$hls=antara($data,'"hlsUrl":"','"');
//echo $data;


//echo "\n\n$hls\n\n";
$data=curlget($hls,$token);
$depan=antara($data,'location: ','playlist.m3u8');
echo "$depan\n\n";
$data= str_replace("exchange",$depan."exchange",$data);
echo $data."\n\n";
$belah=explode('#EXTM3U',$data);
echo $belah[1];



function curlpost($url,$var){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_NOBODY, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $var);
$headers = [
'accept: application/json, text/plain, */*',
'accept-language: en-GB',
'app: dice',
'authorization: Bearer eyJhbGciOiJSUzI1NiIsInB1ciI6IkFVVCIsInNpZyI6ImciLCJ0eXAiOiJKV1QiLCJ2IjozfQ.eyJhcCI6eyJhcG4iOiJhenVyZV92YnR2X3NzbyIsImFwdCI6Ik9QRU5JRF9DT05ORUNUIn0sImFwciI6Ik9QRU5JRF9DT05ORUNUIiwiYXVkIjpbImRjZS5maXZiIl0sImNoZCI6WyJicm46Ym51Il0sImRldiI6IkJST1dTRVIiLCJlbnQiOnsiYWFpIjpbMTE2NSwxNDU3LDE4NDhdLCJnZWkiOlsxMTY0XSwiaWFpIjpbMjc4OF19LCJlbnYiOiJwcm9kIiwiZXhwIjoxNzE4NTA5OTg1LCJndWUiOmZhbHNlLCJpYXQiOjE3MTg1MDkzODUsImlwIjoiMTE0LjEwLjE1Mi44MSIsImlzcyI6ImRjZS1pZCIsImxvMiI6IklELENlbnRyYWwgSmF2YSxDZW50cmFsIEphdmEsU3VyYWthcnRhLCwwLDAsMCIsInBhciI6MCwicHJvIjp7ImlkIjoiYjl6QkhafGRiMzY0ODQ0LTQ5YzgtNGNlMC1iNzMzLTRkNjBhNjU4YzNmMyIsInRwIjoiYSJ9LCJyb2wiOiJDVVNUT01FUiIsInN1YiI6ImI5ekJIWnxkYjM2NDg0NC00OWM4LTRjZTAtYjczMy00ZDYwYTY1OGMzZjMiLCJ1dHAiOiJIVU1BTiJ9.Q7HBTjSOM5aTtKXq222ncRoKnP6gsbjPhIaQALFpLO4-vPxDBWk16E13oZWk0Xz8KCTFf3ujh4m0PIoPHBwsmmn4OiPwUu6fkw3kMC6epzQnE7rl-zWp00gGld2Y7Y3h5SxuP67X2LGjjB7m_CBKrE73uwNP5Z8-ZndrkDbt8b4',
'cm-app-name: Website',
'cm-app-version: 6.7.1.0f71495',
'cm-cst-tcf;',
'cm-cst-usp;',
'cm-dvc-dnt: 0',
'cm-dvc-h: 451',
'cm-dvc-lang: en-US',
'cm-dvc-os: 28',
'cm-dvc-type: 2',
'cm-dvc-w: 1222',
'cm-web-mbl: 0',
'cm-web-page: /live/260749',
'content-type: application/json',
'origin: https://tv.volleyballworld.com',
'priority: u=1, i',
'realm: dce.fivb',
'referer: https://tv.volleyballworld.com/',
'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Brave";v="126"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: cross-site',
'sec-gpc: 1',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
'x-api-key: 857a1e5d-e35e-4fdf-805b-a87b6f8364bf',
'x-app-var: 6.7.1.0f71495'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);
$data=curl_exec($ch);
curl_close($ch);
return $data;
}

function curlget($url,$token){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_NOBODY, true);
$headers = [
'accept: application/json, text/plain, */*',
'accept-language: en-GB',
'app: dice',
'authorization: Bearer '.$token,
'cm-app-name: Website',
'cm-app-version: 6.7.1.0f71495',
'cm-cst-tcf;',
'cm-cst-usp;',
'cm-dvc-dnt: 0',
'cm-dvc-h: 451',
'cm-dvc-lang: en-US',
'cm-dvc-os: 28',
'cm-dvc-type: 2',
'cm-dvc-w: 1222',
'cm-web-mbl: 0',
'cm-web-page: /live/260749',
'content-type: application/json',
'origin: https://tv.volleyballworld.com',
'priority: u=1, i',
'realm: dce.fivb',
'referer: https://tv.volleyballworld.com/',
'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Brave";v="126"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: cross-site',
'sec-gpc: 1',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
'x-api-key: 857a1e5d-e35e-4fdf-805b-a87b6f8364bf',
'x-app-var: 6.7.1.0f71495'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);
$data=curl_exec($ch);
curl_close($ch);
return $data;
}

function antara($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
