<?php

    /**
     * Class Person abstract抽象
     * abstract抽象修饰的类不能获取类中的属性和方法,且这个类不能实例化对象
     * abstract出现在继承类中
     */
    abstract  class ShengWu{
        abstract function jump();
    }



   abstract class  Person extends ShengWu {
        public $name;

        public function  say(){
            echo '请说出你的名字';
        }

        //假设我这里面有个抽象方法,我想获取这个抽象方法,子类就必须去实现这个抽象方法
        abstract function eat();
   }


   class Man extends Person{

       function eat()
       {
           echo '我去吃饭了'.'<br/>';
       }

       function jump()
       {
           echo '我会跳了';
       }
   }

//  $xiaoming = new Person();
//   $xiaoming ->say();
   $niu = new Man();
   $niu->eat();
   $niu->jump();