<?php

   /**
    * 重写发生在 子类继承父类的情况下
    *    也可以发生在构造方法上,既可以发生在普通方法上
    *    重写分两种情况：
    *       1、完全重写
    *       2、子类在继承父类的属性上,在新增自己的一些属性
    *
    *
    *     final修饰的类 不能被extends
    *     final修饰的方法 不能被调用
    *
    *
    * 重写中的权限只能是更大不能是更小
    */

   class Father{
       public $name;
       public $age;
       public function __construct($name,$age)
       {
           $this -> name = $name;
           $this -> age  =  $age;
       }


       public function jump(){
           echo '我能跳3米'.'<br/>';
       }


       /**
        * 现在新增工作的方法
        * 在原来父亲的方法上,儿子有谈恋爱的资格
        *
        */
       public function  work(){
           echo '我勤勤恳恳的工作'.'<br/>';
       }
   }


/**
 * Class Son 子类son继承Father父类,拥有父类的方法
 * 这个时候子类的需求发生改变,要重写父类的方法,新增自己的一些方法
 *
 *  1、完全重写
 */
   class Son extends Father{
       public $height;


       public function __construct($name, $age,$height)
       {
           parent::__construct($name, $age);
           $this -> height = $height;
       }

       //完全仿照父类的方法在写一遍
       public function jump()
       {
           echo '我能跳5米';
       }

       public  function  work()
       {
           parent::work(); // 继承父类的方法,新增自己的一些方法
           echo '我也可以谈恋爱';
       }

   }
$xiaoming = new  Son('小明',20,172);
var_dump($xiaoming);
//   $xiaochi = new Father();
//   $xiaochi -> jump();
//
//   $xiaoming = new Son();
//   $xiaoming ->jump();