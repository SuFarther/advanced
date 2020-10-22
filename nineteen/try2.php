<?php
  /**
   * 自定义注册异常
   * et_exception_handler('方法名');
   */
   function test($e){
       echo $e  -> getMessage();
   }

    set_exception_handler('test');

   throw  new Exception('现在有异常了');