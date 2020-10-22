<?php
   /**
    * static如果用来修饰属性和方法之后,那么该属性和属性是属于整个类的,不是属于某个对象的
    * static中属于整个类的,比创建对象优先,
    * $this不能在static中使用,$this属于某个类的对象,static属于整个类的
    */

   class Person{
       public static $name = '小芬';

       public static function go(){
          echo '我去上学了';
       }

       //静态方法在类中如何调用呢
       function goschool(){
           echo self::$name;
           self::go();
       }
   }

   $niu = new Person();
   $niu->goschool();
   //直接类名:: 属性名 静态类修饰的属性必须加$
//echo Person::$name;
   //直接类名:: 方法名 静态类修饰静态方法
//echo Person::go();