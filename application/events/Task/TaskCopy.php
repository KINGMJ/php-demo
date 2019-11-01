<?php

namespace Events\Task;

use Notifier2\ConcreteNotifier;


require_once APPPATH . 'middleware/notifier2/Autoloader.php';
require_once APPPATH . 'listeners/Autoloader.php';

class TaskCopy
{
	private $observers;

	function __construct($observers) {
		$this->observers = $observers;
	}

	public function notify($params) {
		//被监听者
		$notifier = new ConcreteNotifier();
		foreach ($this->observers as $observer) {
			$notifier->addListener(new $observer() , 'handle_task_copy' , $params);
		}
		$notifier->notifyListeners();
	}
}