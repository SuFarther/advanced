<?php
   /**
    * 命名空间namespace 可以用来解决一个php中有两个类名的问题
    * hello默认在根路径下面的
    * 如果根路径下面还有子路径怎么办
    *
    */
     namespace  hello;
     class Person{
         function eat(){
             echo '我在吃面包<br/>';
         }
     }


//     namespace world;
//     class  Person{
//         function eat(){
//             echo '我在吃馒头';
//         }
//     }

        namespace world\test;
        class  Person{
            function eat(){
                echo '我在吃馒头<br/>';
            }
        }

     /**
      * 输出最近的靠近的他的类
      */
//     $xiaoming = new Person();
//     $xiaoming->eat();  //输出我在吃馒头


      /**
       * 现在我要输出hello下面的eat空间的我在吃面包
       */
//      $xiaoming = new \hello\Person();   //输出我在吃面包
//      $xiaoming->eat();

//       $xiaoming = new \world\test\Person();
//       $xiaoming->eat();   //我在吃馒头