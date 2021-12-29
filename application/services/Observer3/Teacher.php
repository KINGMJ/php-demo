<?php

namespace Services\Observer3;

/**
 * 具体的事件通知器
 * Class Teacher
 */
class Teacher implements Notifier
{
	private $event_handler;

	function __construct() {
		$this->event_handler = new EventHandler();
	}

	public function addListener($object , $method) {
		$this->event_handler->addEvent($object , $method);
	}

	public function notifyListeners() {
		$this->event_handler->handle();
	}
}
