<?php

namespace ObserverDemo4;

require_once APPPATH . 'controllers/observer-demo4/ConcreteNotifier.php';
require_once APPPATH . 'controllers/observer-demo4/Student1.php';
require_once APPPATH . 'controllers/observer-demo4/Student2.php';
require_once APPPATH . 'controllers/observer-demo4/Student3.php';

class TeacherNotifier
{
	private $action;

	public function __construct($action) {
		$this->action = $action;
	}

	public function notify() {
		//三个监听者
		$student1 = new Student1();
		$student2 = new Student2();
		$student3 = new Student3();

		//被监听者
		$notifier = new ConcreteNotifier();

		//根据被监听者的动作来委托事件
		switch ($this->action) {
			case 'enter_classroom':
				$notifier->addListener($student1 , 'readBook');
				$notifier->addListener($student2 , 'doHomework');
				$notifier->addListener($student3 , 'reciteWords');
				break;
			case 'leave_classroom':
				$notifier->addListener($student1 , 'playPhone');
				$notifier->addListener($student2 , 'readNovel');
				$notifier->addListener($student3 , 'chat');
				break;
			default:
				break;
		}
		$notifier->notifyListeners();
	}
}