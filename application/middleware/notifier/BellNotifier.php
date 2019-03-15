<?php

namespace ObserverDemo4;

require_once APPPATH . 'controllers/observer-demo4/ConcreteNotifier.php';
require_once APPPATH . 'controllers/observer-demo4/Student1.php';
require_once APPPATH . 'controllers/observer-demo4/Student2.php';
require_once APPPATH . 'controllers/observer-demo4/Student3.php';
require_once APPPATH . 'controllers/observer-demo4/Teacher1.php';
require_once APPPATH . 'controllers/observer-demo4/Teacher2.php';
require_once APPPATH . 'controllers/observer-demo4/Teacher3.php';

class BellNotifier
{
	private $action;

	public function __construct($action) {
		$this->action = $action;
	}

	public function notify() {
		//六个监听者
		$student1 = new Student1();
		$student2 = new Student2();
		$student3 = new Student3();

		$teacher1 = new Teacher1();
		$teacher2 = new Teacher2();
		$teacher3 = new Teacher3();

		//被监听者
		$notifier = new ConcreteNotifier();

		//根据被监听者的动作来委托事件
		switch ($this->action) {
			case 'class_bell':
				$notifier->addListener($student1 , 'runIntoClass');
				$notifier->addListener($student2 , 'cleanBoard');
				$notifier->addListener($student3 , 'rushToPlayground');
				$notifier->addListener($teacher1 , 'walkIntoClass');
				$notifier->addListener($teacher2 , 'prepareLessons');
				$notifier->addListener($teacher3 , 'getEquipment');
				break;
			case 'school_bell':
				$notifier->addListener($student1 , 'listenToMusic');
				$notifier->addListener($student2 , 'gotoTheBathroom');
				$notifier->addListener($student3 , 'goShopping');
				$notifier->addListener($teacher1 , 'leaveClass');
				$notifier->addListener($teacher3 , 'goHome');
				break;
			default:
				break;
		}
		$notifier->notifyListeners();
	}
}