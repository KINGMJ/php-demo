<?php


namespace Notifier2;



/**
 * 事件处理器
 * Class EventHandler
 * @package ObserverDemo3
 */
class EventHandler
{
	private $events = array();

	//向事件数组中添加具体的事件
	public function addEvent($object , $method , $params) {
		$this->events[] = new Event($object , $method , $params);
	}

	//处理所有的事件
	public function handle() {
		foreach ($this->events as $event) {
			$event->invoke();
		}
	}
}