<?php
/**
 * call_user_func('方法名') 回调用户的方法名
 * 假设方法有参数的话怎么办  call_user_func('方法名','传递过来的参数');
 * 假设有多个参数的话用  call_user_func_array('方法名',['参数1内容1','参数2内容2'。])
 */
//  function test($a){
//      echo '今天天气不错<br/>'.$a;
//  }

class Dog{
    function wangwang(){
        echo '汪汪<br/>';
    }

    function rock(){
        call_user_func([$this,'wangwang']);
        echo '摇尾巴';
    }
}
$dog = new Dog();
$dog->rock();
//call_user_func(['对象','方法名']);
//call_user_func([$dog,'wangwang']);
//  test();
//   call_user_func('test');
//call_user_func('test','值得看太阳');
//call_user_func_array('test',['值得我去看太阳']);