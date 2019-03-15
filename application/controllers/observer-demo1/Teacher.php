<?php

namespace ObserverDemo1;

require_once 'Observable.php';

/**
 * 具体的被观察者类
 * Class Teacher
 */
class Teacher implements Observable
{
    //存放所有的观察者
    private $observerList = array();

    //向观察者数组中添加观察者
    public function addObserver($observer)
    {
        $this->observerList[] = $observer;
    }

    //每个观察者都执行update方法
    public function notifyObservers()
    {
        foreach ($this->observerList as $observer) {
            $observer->update();
        }
    }
}