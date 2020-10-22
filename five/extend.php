<?php

   /**
    *
    * class父类
    */
    class Animal{
        public $name = '小明';
        public function eat(){
            echo '我会吃饭';
       }
    }

   /**
    * 子类Person继承extends父类Animal拥有父类的属性
    */
   class Person extends Animal{
       public   $age = 18;
   }

   $xiaoming = new Person();
   var_dump($xiaoming);
   $xiaoming -> eat();
