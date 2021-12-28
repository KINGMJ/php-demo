<?php

namespace Services\Observer1;


/**
 * 具体目标，被观察者类
 * Class Teacher
 */
class Teacher implements Subject
{
	//存放所有的观察者
	private $observerList = array();

	//向观察者数组中添加观察者
	public function add(Observer $observer) {
		array_push($this->observerList , $observer);
	}

	//移除观察者
	public function remove(Observer $observer) {
		$key = array_search($observer , $this->observerList);
		if ($key !== FALSE) {
			unset($this->observerList[ $key ]);
		}
	}

	//通知所有观察者执行update方法
	public function notifyObservers() {
		foreach ($this->observerList as $observer) {
			$observer->update();
		}
	}
}
