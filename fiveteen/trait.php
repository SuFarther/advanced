<?php

   /**
    * 两个类如何让第三个类同时继承呢,php中只能实现单继承
    * 用trait可以让另外一个类 实现多继承
    * trait可以嵌套trait
    */
   trait Test{
       function test2(){
           echo '我是测试的方法'.'<br/>';
       }
   }
   trait Shield{
       //在另外一个trait中嵌套实现
       use Test;
       function defense(){
           echo '我能防御100点伤害'.'<br/>';
       }

       function  attack(){
           echo '我能增加40点攻击'.'<br/>';
       }
   }


   trait  Sword{
       function attack(){
           echo '我能增加50点攻击'.'<br/>';
       }
   }

   class Hero{
       //另外一个类想让继承盾类和剑类是不可能的
//       use Shield,Sword;
     //如果我两个trait类中都拥有attack方法,我想知道他使用都是哪一个方法
      use Shield,Sword{
          Shield::attack insteadof Sword;  //insteadof 而不是
          Sword::attack as SwordAttck;
      }
   }


   $hero = new Hero();
   $hero->defense();
   $hero->test2();
   $hero->attack();
   $hero->SwordAttck();