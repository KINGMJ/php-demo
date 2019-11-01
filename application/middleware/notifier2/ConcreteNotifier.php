<?php

namespace Notifier2;

/**
 * 具体的事件通知器
 * Class Teacher
 */
class ConcreteNotifier implements Notifier
{
	private $event_handler;

	function __construct() {
		$this->event_handler = new EventHandler();
	}

	public function addListener($object , $method , $params = []) {
		$this->event_handler->addEvent($object , $method , $params);
	}

	public function notifyListeners() {
		$this->event_handler->handle();
	}
}