<?php

namespace Services\Observer1;

/**
 * 抽象目标，被观察者接口
 * Interface Subject
 */
interface Subject
{
	//添加一个观察者
	public function add(Observer $observer);

	//移除一个观察者
	public function remove(Observer $observer);

	//通知所有的观察者
	public function notifyObservers();
}
