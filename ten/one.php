<?php

  class Person{
//      public $name = '小明';
      public $name;
      public $age;
      public $height;

      /**
       * 输出类中的属性 __toString
       */
      public  function  __toString()
      {
//         return $this -> name;
          return '我爱你中国';
//          return "你的姓名为：".$this->name.'<br/>'."你的年龄为:".$this->age.'<br/>'.'你的身高为:'.$this->height;
      }


      /**
       * 打印一个对象数组  要规定的对象数组
       */
      public function __debugInfo()
      {
         return ['age' => $this ->age,'height' => $this ->height];
      }

      /**
       * 当调用一个不存在对象方法的时候触发 __call
       * 参数1： 函数名
       * 参数2； 是一个数组,函数中的参数都会被存放到这个数组中
       */
      public function __call($name, $arguments)
      {
          var_dump($name,$arguments);
      }
}

  $xiaoming = new Person();
  //直接打印对象是什么结果都没有的
  echo $xiaoming;
//echo $xiaoming -> name = '张三';
//echo $xiaoming -> age = 18;
//echo $xiaoming -> height ='173cm';

// var_dump($xiaoming);
 $xiaoming -> test(1,2,3);