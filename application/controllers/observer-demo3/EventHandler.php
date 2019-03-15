<?php


namespace ObserverDemo3;

require_once 'Event.php';

/**
 * 事件处理器
 * Class EventHandler
 * @package ObserverDemo3
 */
class EventHandler
{
	private $events = array();

	//向事件数组中添加具体的事件
	public function addEvent($object , $method) {
		$this->events[] = new Event($object , $method);
	}

	//处理所有的事件
	public function handle() {
		foreach ($this->events as $event) {
			$event->invoke();
		}
	}
}