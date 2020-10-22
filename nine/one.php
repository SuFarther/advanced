<?php
  /**
   * __unset
   *   触发时机: 对象在外部销毁私有或者受保护成员属性的时候调用
   *   该方法有一个参数: 参数就是私有的成员属性名
   * __isset 是否设置过
   *   触发时机: 对象在外部判断私有或者受保护成员属性的时候调用
   *   该方法有一个参数: 参数就是私有的成员属性名
   *
   */

  class  Person{
      public $name;
      protected $age;
      private $height;


      public function __unset($name)
      {
          if($name == 'age'){
              unset($this -> $name);
          }
      }



      public function __set($name, $value)
      {
          if($name == 'age'){
              $this -> $name = $value;
          }
      }

      public function __get($name)
      {
          if ($name == 'age'){
              return $this -> $name;
          }
      }


      //判断私有属性有没有设置,会触发这个方法
      public function  __isset($name)
      {
          if($name == 'age'){
              return isset($this -> $name);
          }
//          echo $name;
      }

      /**
       * 函数调用结束会调用这个方法
       */
      public function __destruct()
      {
          echo '我被杀死了';
      }

  }

/**
 * 外部属性不能获取类中受保护的属性
 */
  $niu = new Person();
  $niu -> age = 18;
  var_dump(isset($niu -> age));
//  echo $niu -> age;
//  $niu -> name = '张三';
//  var_dump(isset($niu->name));
//  unset($niu -> name);
//unset($niu -> age);
//  var_dump($niu);