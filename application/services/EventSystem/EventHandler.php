<?php

namespace Services\EventSystem;

/**
 * 事件处理器，具体的被观察对象
 * Class EventHandler
 * @package Services\EventSystem
 */
class EventHandler implements Notifier
{
	private $listeners = [];

	//向事件数组中添加具体的观察者
	public function addListener($object , $method , $params = []): void {
		$this->listeners[] = new Event($object , $method , $params);
	}

	//通知所有的观察者执行对应的事件
	public function notifyListeners(): void {
		foreach ($this->listeners as $event) {
			$event->invoke();
		}
	}
}
