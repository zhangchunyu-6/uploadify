<?php
    $arrInfo = $_FILES['Filedata'];
    $tmpName = $arrInfo['tmp_name'];
    $reaName = $arrInfo['name'];
    $ext =explode('.',$reaName)[1];
    $baseName=md5(uniqid()).".$ext";
    $baseDir=Date('Y/m/d',time());
    if(!is_dir($baseDir)){
        mkdir($baseDir,0,777);
    }
    $filePath = $baseDir.$baseName;
    move_uploaded_file($tmpName,$filePath);
    echo $filePath;
?>