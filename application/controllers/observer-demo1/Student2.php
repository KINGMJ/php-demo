<?php

namespace ObserverDemo1;

require_once 'Observer.php';

/**
 * 学生2，观察者
 * Class Student2
 */
class Student2 implements Observer
{
    public function update()
    {
        print_r("学生二：观察到老师走了，开始看小说<br>");
    }
}