<?php
   /**
    * try{

    * }catch(Exception $e){

    * }
    * 获取异常
    */
   try{
       echo '开始起床<br/>';
       /**
        * 假设中间出现异常,就得抛出异常,抛出异常的话,后面的代码不在执行,会进入catch代码里面
        * throw new Exception(message,code);
        */
       throw new Exception('拉肚子了',10);
       echo '起床漱口<br/>';
   }catch (Exception $e){
       echo $e->getMessage();
       echo $e->getCode();
   }
   echo '开始上班';