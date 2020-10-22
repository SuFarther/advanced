<?php
    /**
     * 访问修饰符在不继承父类的情况
     *
     *   public可以访问类部中的方法和属性
     *   protected在类的外部不可以访问类中的方法和属性
     *   private不可以在类的外部不可以访问类中的属性和方法
     */

     class Person{
         public $name;
         protected $age;
         private $height;



         public function __construct($name,$age,$height)
         {
             $this -> name  = $name;
             $this -> age    =  $age;
             $this -> height = $height;
         }
     }

     $xiaoming = new Person('小明',18,'172cm');
     echo $xiaoming -> name;
     var_dump($xiaoming);
//     echo $xiaoming -> age;
//     echo $xiaoming -> height;