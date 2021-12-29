<?php

namespace Services\Observer2;

/**
 * 抽象主题
 * Interface Subject
 * @package Services\Observer2
 */
interface Subject
{
	/**
	 * 添加一个观察者
	 * @param $object
	 * @param $method
	 * @return mixed
	 */
	public function add($object , $method);

	//通知所有的观察者
	public function notifyObservers();
}
