<?php

namespace Events\Task;

use Events\Events;
use Services\EventSystem\EventHandler;

class Copy extends Events
{
	public function notify($params) {

		log_message("error" , var_export($this->observers , TRUE));
		//被监听者
		$handler = new EventHandler();
		foreach ($this->observers as $observer) {
			$handler->addListener(new $observer() , 'handle_task_copy' , $params);
		}
		$handler->notifyListeners();
	}
}
