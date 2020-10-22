<?php
   /**
    * 构造方法对对象进行初始化,关键字this的用法
    * 第二种在属性上赋值
    * public $name = '写死';
    * public $age = 18;
    * 最终的结果就是不灵活
    */
   class Person{
       public $name;
       public $age;


       //第三种方式 通过构造方法赋值,好处是类调用时会调用构造方法
       public function __construct($name,$age)
       {
           //在类中怎么调用自己的成员属性呢
           // this 访问自己类中的成员属性
           $this -> name =  $name;
           $this -> age = $age;
//           echo '小样我被调用了呀';

       }

       //一种方法先于另外一个方法访问
       public function test(){
           echo '我去上学了'.'<br/>';
       }

       public  function test1(){
           $this->test();
           echo '我去教堂';
       }
   }

   $xiaoming = new Person('小明',20);
   $xiaoming -> test1();
   var_dump($xiaoming);
   $niu = new Person('小白',21);
   var_dump($niu);





    /**
     *  给类的属性赋值是类名+属性
     *  $xiaoming -> name
     *  $xiaoming -> age
     *
     *
     */
   //第一种方案 直接赋值 不灵活 写死了
//   $xiaoming = new Person();
//   $xiaoming -> name = '小明 ';
//   $xiaoming -> age = 18;
//   var_dump($xiaoming);
//
//   $niu  = new Person();
//    $niu -> name = '小明 ';
//    $niu -> age = 18;
//    var_dump($niu);


