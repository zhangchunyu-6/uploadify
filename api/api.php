<?php
    $con=mysqli_connect('127.0.0.1','root','root','mychar');
    //die;
    $url=file_get_contents('http://api.avatardata.cn/ShengXiaoPeiDui/Lookup?key=2ab2e21898cd4589b73fe8221ee1221c&shengxiao1=鼠&shengxiao2=虎');
    //var_dump($url);
    $re=json_decode($url,1);
    //print_r($re);die;
    $shengxiao1=$re['result']['shengxiao1'];
    $shengxiao2=$re['result']['shengxiao2'];
    $title=$re['result']['title'];
    $content1=$re['result']['content1'];
    $content2=$re['result']['content2'];
    $sql="insert into api (shengxiao1,shengxiao2,title,content1,content2) values ('$shengxiao1','$shengxiao2','$title','$content1','$content2')";
    //print_r($shengxiao2);
    $res=mysqli_query($con,$sql);
    if($res==1){
        echo "<script>alert(调用成功);    </script>";
    }else{
        echo "<script>alert(调用失败);</script>";
    }
?>