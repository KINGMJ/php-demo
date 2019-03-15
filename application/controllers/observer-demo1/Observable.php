<?php

namespace ObserverDemo1;
/**
 * 被观察者接口
 * Interface Observable
 */
interface Observable
{
    //添加一个观察者
    public function addObserver($observer);

    //通知所有的观察者
    public function notifyObservers();
}