<?php

namespace ObserverDemo1;

/**
 * 观察者接口
 * Interface Observer
 * @package ObserverDemo1
 */
interface Observer
{
    //观察到别人发生变化，自己也改变
    public function update();
}