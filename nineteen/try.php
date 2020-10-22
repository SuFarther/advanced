<?php

  /**
   * 自定义异常
   *  异常捕获是自上而下而下的
   */
   class  MyException extends  Exception
   {
       function  demo(){
           echo '执行第二套方案<br/>';
       }
   }

try {
    echo '我要准备打游戏了<br/>';
    //抛出自定义的异常
    throw  new MyException('女朋友突然打电话过来');
    echo '准备打电话<br/>';
}catch (MyException $e){
     echo $e->getMessage().'<br/>';
     $e->demo();
}catch (Exception $e){
       echo $e->getMessage();
}