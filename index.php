

<?php

$botToken = "5443248801:AAF7zkNGBq6AnXDxnSo5dwfMuNiNwTBe1TM";
$website = "https://api.telegram.org/bot".$botToken;

#$update = url_get_contents('php://input');
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

switch($message) {
    case "/test":
        sendMessage($chatId, "test");
        break;
    case "/hi":
        sendMessage($chatId, "hi there!");
        break;
    default:
        sendMessage($chatId, "default");
}

function sendMessage ($chatId, $message) {
    $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
    url_get_contents($url);

}

function url_get_contents($Url) {
    if(!function_exists('curl_init')) {
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

?>
