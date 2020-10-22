<?php

     $dsn='mysql:host=localhost;dbname=test;charset=utf8mb4';


     try{
         $pdo = new PDO($dsn,'root','123456');
         //设置错误模式
         $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     }catch (PDOException $e){
         die('数据库连接失败'.$e->getMessage());
     }



//$sql = 'inserts into shop_user(username,password,sex,age) values("小芬","123456",0,18)';
//$sql = 'insert into shop_user(username,password,sex,age) values("小芬","123456",0,18)';
//$sql = 'update shop_user set username="王五",sex=1 where id = 17';
//  $sql = 'select * from shop_user';
//$sql = 'delete  from shop_user where id = 17';
//     echo $sql;
    /**
     * 用于增删改
     */
//    $res = $pdo->exec($sql);
    // $res = $pdo->query($sql);
    // var_dump($res);
//    var_dump($res);
    /**
     * 返回成功后的结果集数据,为1个
     */
 //   if($res > 0){
//        echo '添加成功';
//        echo '修改成功';
 //       echo '删除成功';
        //返回成功后的最后个id
//        echo $pdo->lastInsertId();
 //   }else {
//        echo '添加失败';
//        echo '修改失败';
 //       echo '删除失败';
//    }


    try {
        $sql = 'delete  from shop_user where id = 16';
        $res = $pdo->exec($sql);
        var_dump($res);
        if($res > 0){
            echo '删除成功';
        }else{
            echo '删除失败';
        }
    }catch (PDOException $e){
        echo $e->getMessage();
    }