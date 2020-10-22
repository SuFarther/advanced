<?php

     include 'namespace.php';

    /**
     * 假设我要使用这个空间中的其中的一个Person我该怎么选择呢
     *
     *  Person对象不明确给他们各自的对象取个别名
     *
     */


     use \hello\Person as Person1;
     use  \world\test\Person as Person2;

     $xiaoming = new Person1();  //吃面包
     $xiaoming -> eat();
     $xiaoming =  new Person2(); //吃馒头
     $xiaoming -> eat();




