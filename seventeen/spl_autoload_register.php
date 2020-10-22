<?php
    /**
     * @param $className
     * spl_autoload_register('方法名');
     */
   function myAutoload($className){
       echo $className;
   }

   spl_autoload_register('myAutoload');
   $dog = new Dog();