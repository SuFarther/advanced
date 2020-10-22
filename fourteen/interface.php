<?php

/**
 * Interface eat
 * 接口用interface实现,接口中如果有方法
 * 而且假设有个类实现这个接口就必须实现这个接口中的方法
 *
 * 假设我有多个类,我要继承那个父类中的属性
 * 先继承在实现
 *
 * 假设我有两个接口,那么实现那两个接口的方法被这个类实现的话,这个类中实现的接口就必须 实现接口中的所有方法
 *
 * 接口可以多继承,假设一个1接口继承另外一个接口,那另外接口拥有另外一个接口中的方法,那么实现该类的接口就得实现
 * 继承过来接口的所有方法
 */
  interface Test{
      function test();
  }

   interface Eat extends Test {
       function  eat();
   }

   interface Jump{
       function jump();
   }

   class Animal{
   }

   class Person extends  Animal implements Eat,Jump {


      public function eat()
      {
          echo '我在吃饭'.'<br/>';
      }

      public function jump()
      {
           echo '我会跳'.'<br/>';
      }

       public function test()
       {
           echo '我在测试';
       }
   }

   $xiaoming = new Person();
   $xiaoming->eat();
   $xiaoming->jump();
   $xiaoming->test();