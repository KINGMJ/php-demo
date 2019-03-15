<?php

namespace ObserverDemo2;

require_once 'Observable.php';
require_once 'Event.php';

/**
 * 具体的被观察者类
 * Class Teacher
 */
class Teacher implements Observable
{
    //存放所有的观察者
    private $observerList = array();

    //向观察者数组中添加观察者
    public function addObserver($object, $method)
    {
        $this->observerList[] = new Event($object, $method);
    }

    //每个观察者都执行update方法
    public function notifyObservers()
    {
        foreach ($this->observerList as $observer) {
            $observer->invoke();
        }
    }
}