<?php
date_default_timezone_set('Asia/Jakarta');

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){ 
    $base_url = "https://";   
}else{
    $base_url = "http://";   
}
 
$base_url.= $_SERVER['HTTP_HOST'];   
$base_url.= $_SERVER['REQUEST_URI'];  

$filecounter=("counter.txt");
$visitorFile = "visitors.txt";
$kunjungan = file($filecounter);

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$currentHour = date('Y-m-d H');

$visitorList = file($visitorFile, FILE_IGNORE_NEW_LINES);

$alreadyVisited = false;

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}
// Check if IP is passed from a proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $ip = trim($ipList[0]);
}
// Check if IP is passed from remote address
else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$ip_private = $_SERVER['REMOTE_ADDR'];

if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    // Check for private IP ranges
    if (preg_match('/^(10\.|172\.16\.|192\.168\.)/', $ip)) {
        $its_ip = "private";
    } else if ($ip === '127.0.0.1') {
        $its_ip = "localhost";
    } else {
        $its_ip = "public";
    }
} elseif (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    // Check for private IPv6 ranges
    if (preg_match('/^fc|^fd/', $ip)) {
        $its_ip = "private";
    } else if ($ip === '::1') {
        $its_ip = "localhost";
    } else {
        $its_ip = "public";
    }
}  else {
    $its_ip = "null";
}


foreach ($visitorList as $visitor) {
    list($storedUrl, $storedUserAgent, $storedIpPublic, $storedits_ip, $storedIpPrivate, $storedTime) = explode('|', $visitor);
    if ($storedUrl === $base_url && $storedUserAgent === $userAgent && $storedIpPublic === $ip && $storedits_ip === $its_ip && $storedTime === $currentHour) {
        $alreadyVisited = true;
        break;
    }
}

if (!$alreadyVisited) {
    $new[] = $base_url . '|' . $userAgent . '|' . $ip . '|' . $its_ip . '|'  . $currentHour;
    file_put_contents($visitorFile, implode(PHP_EOL, $new) . PHP_EOL, FILE_APPEND);

    if (isset($kunjungan)) {
       $kunjungan[0]++;
    }else{
        $kunjungan[0]=1;
    }

    $file=fopen($filecounter,"w");
    fputs($file,"$kunjungan[0]");
    fclose($file);

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
    $message_text = $message_text . " dengan total seluruh kunjungan sebanyak " . $kunjungan[0] . " kali dan IP $its_ip: ". $ip;

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
} 

?>