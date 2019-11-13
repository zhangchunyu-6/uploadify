<?php
    $arr=$_FILES;
    //接所有值
    $info =$_REQUEST;
    $ext=explode('.',$info['filename'])[1];
    $fileName=$info['filename'];
    $baseDir="./".date('Y/m/d/',time());
      //判断有没有这个文件 如果没有的情况下 新建一个文件夹
        if(!is_dir($baseDir)){
          mkdir($baseDir,0,777);
      }
    //
    $filePath=$baseDir.$fileName;
    $tmpName=$arr['data']['tmp_name'];
    //读取内容
    $content=file_get_contents($tmpName);
    file_put_contents($filePath,$content,FILE_APPEND);
    //去除左边的符号
    $filePath=ltrim($filePath,".");
    $filePath="/file/".$filePath;
    $arrReturn=array(
        "error"=>0,
        "data"=>array(
            'path'=>$filePath,
        ),
    );
    echo json_encode($arrReturn);
   ?>