<?php

namespace ObserverDemo2;
/**
 * 被观察者接口
 * Interface Observable
 */
interface Observable
{
    //添加一个观察者
    public function addObserver($object, $method);

    //通知所有的观察者
    public function notifyObservers();
}