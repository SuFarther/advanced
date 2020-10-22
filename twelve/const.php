<?php
    /**
     * 常量的属性修饰前面不能有修饰符修饰,类的内部常用const表示
     * 类的外部可以用define或者const修饰
     * 修饰的常常量必须是 大写
     * [注]常量前面不能加修饰符
     *
     */
     class  Person{
         const  ABCD = 1000;
         /**
          * 通过类的内部去访问类常量
          */
          public function  demo(){
              echo self::ABCD;
          }

     }

     $xiaoming = new Person();
     $xiaoming -> demo();

     /**
      * 类的外部访问类常量属性 类名::常量名
      */
//     echo Person::ABCD;