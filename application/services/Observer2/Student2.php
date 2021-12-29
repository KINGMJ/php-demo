<?php

namespace Services\Observer2;

/**
 * 学生2，观察者
 * Class Student2
 */
class Student2
{
    public function readNovel()
    {
        printr("学生二：观察到老师走了，开始看小说");
    }

    public function doHomework()
    {
        printr("学生二：观察到老师来了，开始写作业");
    }
}
