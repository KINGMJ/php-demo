<?php

namespace ObserverDemo1;

require_once 'Observer.php';

/**
 * 学生1，观察者
 * Class Student1
 */
class Student1 implements Observer
{
    public function update()
    {
        print_r("学生一：观察到老师走了，开始玩手机<br>");
    }
}