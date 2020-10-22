<?php
   /**
    * PDO连接多套数据库语言
    * dba $dba = 'mysql:host=localhost;dbname=数据库名;charset=utf8';
    * 新建一个pdo对象  $pdo = new PDO($dba,'数据库账号','数据库密码');
    *
    */
//    $dsn = 'myqsl:host=localhost;dbname=test;charset=utf8mb4';
//    $pdo = new PDO($dsn,'root','123456');
//    var_dump($pdo);

/**
 * 第一种连接数据库的方式
 */
//    $dsn  = 'mysql:host=localhost;dbname=test;charset=utf8mb4';
//
//    try {
//        $pdo = new PDO($dsn,'root','123456');
//        var_dump($pdo);
//    }catch (PDOException $e){
//        echo $e->getMessage();
//    }


/**
 *外部文件引入的方式
 */
    $dsn = 'uri:file:///Applications/MAMP/htdocs/advanced/twenty/dsn.txt';
    try {
        $pdo = new PDO($dsn,root,'123456');
        var_dump($pdo);
    }catch (PDOException $e){
        echo $e->getMessage();
    }

    /**
     * 通过php.ini修改
     */

