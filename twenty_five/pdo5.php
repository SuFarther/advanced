<?php

    $dsn = 'mysql:host=localhost;dbname=test;charset=utf8mb4';


    try{
        $pdo = new PDO($dsn,'root','123456');
        //设置错误模式
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //设置默认提取模式  //返回一个索引为结果集列名的数组
        $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        die('数据库连接失败'.$e->getMessage());
    }


    try {
        $stmt = $pdo->prepare('select id,name,age,money from test');
        $stmt->execute(); //执行

        $stmt ->bindColumn('id',$id);
        $stmt ->bindColumn('name',$name);
        $stmt ->bindColumn('age',$age);
        $stmt ->bindColumn('money',$money);


        echo '<table border="1" width="600px" cellpadding="1" cellspacing="1">';
        echo '<tr><td>序号</td><td>名字</td><td>年龄</td><td>金额</td></tr>';
        while($stmt->fetch()){ //一行一行向下获取
            echo '<tr>';
            echo '<td>'.$id.'</td>';
            echo '<td>'.$name.'</td>';
            echo '<td>'.$age.'</td>';
            echo '<td>'.$money.'</td>';
            echo '</tr>';
        }
        echo '</table>';
        /**
         *循环遍历
         */



        //返回结果集 结果集中获取下一行
//        $result = $stmt->fetch(PDO::FETCH_ASSOC);  //获取关联数组
//        $result = $stmt->fetch(PDO::FETCH_NUM);  //返回索引数组
//        $result = $stmt->fetch();
//        var_dump($result);
//        $result = $stmt->fetch();
//        var_dump($result);
//        $result = $stmt->fetch();
//        var_dump($result);
        //获取全部数据
//        $result = $stmt->fetchAll();
//        var_dump($result);
    }catch (PDOException $e){
            echo $e->getMessage();
    }