<?php
   // echo phpinfo();die;

    $con=mysqli_connect('127.0.0.1','root','root','mychar');
    $arr=$_REQUEST;
    //print_r($arr);
    $title=$arr['title'] ??  "";
    $content1=$arr['content1'] ?? "";
    $content2=$arr['content2'] ?? "";
    if($arr){
       // echo 111;die;
        $sql="select * from api where title like '%$title%' and content1 like '%$content1%'";
        //echo $sql;
    }else{
        $sql="select * from api";
    }
    $res=mysqli_query($con,$sql);
    $data=[];
    while($row=mysqli_fetch_array($res)){
    array_push($data,$row);
    }
    ?>

    <form action="index.php" method="post">
        <input type="text" name="title" placeholder="根据标签搜索">
        <input type="text" name="content1" placeholder="根据内容一搜索">
        <input type="text" name="content2" placeholder="根据内容二搜索">
        <input type="submit" value="搜索">
    </form>

    <table border="2">
                <tr>
                    <td>ID</td>
                    <td>生肖1</td>
                    <td>生肖2</td>
                    <td>标题</td>
                    <td>内容1</td>
                    <td>内容2</td>
                </tr>

                <?php foreach($data as $k=>$v){?>
                <tr>
                    <td><?=$v['id']?></td>
                    <td><?=$v['shengxiao1']?></td>
                    <td><?=$v['shengxiao2']?></td>
                    <td><?=$v['title']?></td>
                    <td><?=$v['content1']?></td>
                    <td><?=$v['content2']?></td>

                </tr>
                <?php }?>

    </table>
