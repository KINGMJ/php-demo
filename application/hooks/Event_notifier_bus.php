<?php

require_once APPPATH . 'middleware/notifier/TeacherNotifier.php';
require_once APPPATH . 'middleware/notifier/BellNotifier.php';

class Event_notifier_bus
{
	private $CI;
	//notifier中间件配置
	private $notifierMiddleware = array(
		TEACHER_NOTIFIER => TEACHER_NOTIFIER ,
		BELL_NOTIFIER => BELL_NOTIFIER
	);

	function __construct() {
		$this->CI = &get_instance();
	}

	public function handle($params) {
		$notifier = $params[0];
		$action = $params[1];
		(new $this->notifierMiddleware[$notifier]($action))->notify();
	}
}