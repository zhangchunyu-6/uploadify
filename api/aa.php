<?php
   // echo phpinfo();die;
    $data='dafegad';
    $key="1234567";
    //echo $key;
    //规则;
    $arr=openssl_get_cipher_methods();
    $method ="DES-CBC";
   // print_r($method);
    $iv=12345678;

    $target=openssl_encrypt($data,$method,$key,OPENSSL_RAW_DATA,$iv);
    //echo $target;
    //加密
    $basseEncode=base64_encode($target);
    //echo $basseEncode;
    $basseDEcode=base64_decode($basseEncode);
    $info=openssl_decrypt($basseDEcode,$method,$key,OPENSSL_RAW_DATA,$iv);
    echo $info;
    //echo($basseEncode);
?>