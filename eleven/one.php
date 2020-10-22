<?php
   class Person{
       public $name;
       public $age;
       public $height;

       function  __construct($name,$age,$height)
       {
           $this -> name = $name;
           $this -> age  = $age;
           $this -> height = $height;
       }

       /**
        * 调用serialize(对象名默认会调用)__sleep方法 但是我不想全部调用指向调用
        * age和height方法
        */
       function __sleep()
       {
//           echo '我苏醒了';
           //返回值是数组字符串
           return ['age','height'];
       }

       function __wakeup()
       {
           echo '我睡醒了';
       }

       //当你在克隆的时候会自动 调用 这个clone方法 把age修改成18
       function  __clone()
       {
          $this -> age = 18;
       }
   }

    /**
     * 如果没有这个类,会触发这个方法,一般写在类外面
     */
      function __autoload($className){
//          $file = $className.'.php';
//          include $file;
            include  $className.'.php';
      }
//   $niu = new Person('小明',20,180);

    $dog = new Dog(); //没有这个类报错
    $dog ->wangwang();
   //克隆一个对象就拥有这个对象的属性
//   $xiaoming = clone($niu);
//   var_dump($xiaoming);
//   var_dump($xiaoming);
    /**
     * 把person中的属性序列化到磁盘中
     *  $str = serialize($niu);
     *
     * file_put_contents('文件名字符串',文件名) 得到一个新文件
     *
     *
     *
     */
//     $str = serialize($niu);
//     //打印到字符串
//     file_put_contents('niu.txt',$str);
//   echo $str

      //先把里面的值取出来
//      $str = file_get_contents('niu.txt');
      //然后反序列化出来
//      $obj = unserialize($str);
//      var_dump($obj);

