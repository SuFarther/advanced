<?php
   /**
    * 在继承的情况下 访问修饰符的作用
    *
    *
    * 你的姓名是:科比
    * 你的年龄是:35
    * public和protected可以访问
    * private是不可以访问的
    */

   class Animal{
       public $name = '科比';
       protected $age  = 35;
       private  $height = 2;
   }


   class Person extends Animal{


       public function say(){
           echo '你的姓名是:'.$this -> name.'<br/>';
           echo '你的年龄是:'.$this -> age.'<br/>';
//           echo '你的身高是：'.$this -> height.'<br/>';
       }
   }

   $xiaoming = new Person();
   echo $xiaoming -> say();