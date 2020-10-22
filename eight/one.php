<?php
   class Person{
       public $name = '张三';
       protected $age = 18;
       private $height = '1.85cm';

       /**
        * __get($name)
        * @param $name 获取的属性名
        * @return int
        */
       public  function __get($name)
       {
          if($name == 'age'){ //判断__get($name属性名) 如果这个属性名 $name == 父类的属性
              return $this -> $name.'<br/>';
          }

          if($name == 'height'){
              return $this -> $name;
          }
       }

       /**
        * __set($name, $value)
        * @param $name 属性名
        * @param $value 属性值
        */
       public function __set($name, $value)
       {
           if($name == 'age'){
               $this -> $name = $value;
           }
//           var_dump($name, $value);
       }
       /**
        * 现在我想要访问类中的私有属性和受保护的属性,就要调用__get方法
        */
   }


   $xiaoming = new Person();
   echo $xiaoming -> age = 20;
//   echo $xiaoming -> name;
//   echo $xiaoming ->age; //18
//   echo  $xiaoming -> height;
//   echo $xiaoming -> age;
//   echo $xiaoming -> height;