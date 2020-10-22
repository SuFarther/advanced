<?php
   /**
    * 新建一个类
    */
    class Person{
        public $age;
        public function eat(){
            echo '我在吃饭';
        }
    }

    $xiaoming = new Person();
    var_dump($xiaoming);

//     $name = 'Person';
//     $person =  new $name();
//     var_dump($person);

     //获取属性
    $xiaoming -> age;
    //获取方法
    $xiaoming -> eat();
    //先设置属性的值,在获取
    $xiaoming -> age = 18;
    var_dump($xiaoming -> age);

