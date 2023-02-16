<?php
$filecounter=("counter.txt");
$kunjungan=file($filecounter);
$kunjungan[0]++;
$file=fopen($filecounter,"w");
fputs($file,"$kunjungan[0]");
fclose($file);

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){ 
    $base_url = "https://";   
}else{
	$base_url = "http://";   
}
 
$base_url.= $_SERVER['HTTP_HOST'];   
$base_url.= $_SERVER['REQUEST_URI'];   

$url = "https://pastebin.com/raw/Une87pEE"; 

$ch = curl_init(); 
$token = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $token);
$output = curl_exec($ch); 
curl_close($ch);

$chat_id = "846168914";
$message_text = "Ada yang buka web Portfolio <a href='". $base_url."'>".$base_url."</a>";
$message_text = $message_text . " dengan total kunjungan sebanyak " . $kunjungan[0];

$url = "https://api.telegram.org/bot" . $output . "/sendMessage?parse_mode=html&chat_id=" . $chat_id;
$url = $url . "&text=" . urlencode($message_text);

$ch = curl_init();
$optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
curl_close($ch); 

?>