<?php

namespace ObserverDemo2;

/**
 * 学生1，观察者
 * Class Student1
 */
class Student1
{

    public function playPhone()
    {
        print_r("学生一：观察到老师走了，开始玩手机<br>");
    }

    public function readBook()
    {
        print_r("学生一：观察到老师来了，开始看书<br>");
    }
}