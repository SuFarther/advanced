<?php

  $dsn = 'mysql:host=localhost;dbname=test;charset=utf8mb4';


    try{
        $pdo = new PDO($dsn,'root','123456');
        //设置错误模式
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e){
        die('数据库连接失败'.$e->getMessage());
    }


    //开启事务
    $pdo ->beginTransaction();


    try {
        $sql = 'update test set money=money-200 where id = 1';
        $res = $pdo->exec($sql);
        if($res > 0){
            echo '狗蛋转出成功<br/>';
        }else{
            throw  new PDOException('狗蛋转出失败');
        }

        $sql = 'update test set money=money+200 where id = 2';
        $res = $pdo->exec($sql);
        if($res > 0){
            echo '摩登收取成功<br/>';
        }else{
            throw  new PDOException('摩登收取失败');
        }

        //两个事务都同时成功或者失败
        $pdo->commit(); //提交
        echo '交易成功';
    }catch (PDOException $e){
        //回滚事务
        $pdo->rollBack();
        echo $e->getMessage();
    }