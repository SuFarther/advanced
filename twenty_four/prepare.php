<?php
    /**
     * 预处理对象效率更高
     */


    $dsn = 'mysql:host=localhost;dbname=test;charset=utf8mb4';


    try{
        $pdo = new PDO($dsn,'root','123456');
        //设置错误模式
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e){
        die('数据库连接失败'.$e->getMessage());
    }


    /**
     * 传统的添加数据的方式
     * 依次插入3条语句,效率比较低且不安全
     */
//    $pdo->exec('insert into test(name,age,money) values("xiaoqi",18,60)');
//    $pdo->exec('insert into test(name,age,money) values("xiaoqi",18,60)');
//    $pdo->exec('insert into test(name,age,money) values("xiaoqi",18,60)');


/**
 * 用预处理的方式去插入
 */

    try {
//        //第一种以问号的方式插入
//        $stmt = $pdo->prepare('insert into test(name,age,money) values(?,?,?)');
//        //用一条语句搞定 索引数组 快捷方式
//        $stmt->execute(['liubei',18,6060]);

        //第二种,占位符绑定
//        $stmt = $pdo->prepare('insert into test(name,age,money) values(:name,:age,:money)');
//
//        $stmt->execute([':name'=>'xiaoliu',':age'=>19,':money'=>20]);

        //删除
//        $stmt = $pdo->prepare('delete  from test where id=?');
//        $stmt->execute([11]);

        //更新
        $stmt = $pdo->prepare('update test set name=:name where id=:id');
        $stmt->execute([':name'=>'chaocao',':id'=>15]);

        //第一种,绑定参数的方式,键和值
//        $stmt->bindParam(':name',$name);
//        $stmt->bindParam(':age',$age);
//        $stmt->bindParam(':money',$money);
//
//        $name='shaheshang';
//        $age=18;
//        $money=620;
//        $stmt->execute();  //执行这条语句
//
//        $name='tangsheng';
//        $age=19;
//        $money=700;
//        $stmt->execute();  //执行这条语句

//        if($stmt>0){
//            echo '插入成功';
//        }else{
//            throw new PDOException('插入数据失败');
//        }
    }catch (PDOException $e){
        echo $e->getMessage();
    }