<?php


namespace Services\Observer2;

/**
 * 具体的被观察者
 * Class Teacher
 * @package Services\Observer2
 */
class Teacher implements Subject
{
	//存放所有的观察者
	private $observerList = [];

	public function add($object , $method) {
		array_push($this->observerList , new Event($object , $method));
	}

	public function notifyObservers() {
		foreach ($this->observerList as $observer) {
			$observer->invoke();
		}
	}
}
