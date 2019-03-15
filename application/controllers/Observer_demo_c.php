<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'observer-demo1/Student1.php';
require_once 'observer-demo1/Student2.php';
require_once 'observer-demo1/Student3.php';
require_once 'observer-demo1/Teacher.php';

require_once 'observer-demo2/Student1.php';
require_once 'observer-demo2/Student2.php';
require_once 'observer-demo2/Student3.php';
require_once 'observer-demo2/Teacher.php';

require_once 'observer-demo3/Student1.php';
require_once 'observer-demo3/Student2.php';
require_once 'observer-demo3/Student3.php';
require_once 'observer-demo3/Teacher.php';

class Observer_demo_c extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}

	/**
	 * observer demo1：一个基本的观察者模式
	 */
	public function observer1() {
		//三个观察者
		$student1 = new \ObserverDemo1\Student1();
		$student2 = new \ObserverDemo1\Student2();
		$student3 = new \ObserverDemo1\Student3();
		//被观察者
		$teacher = new \ObserverDemo1\Teacher();
		//添加观察者
		$teacher->addObserver($student1);
		$teacher->addObserver($student2);
		$teacher->addObserver($student3);

		//通知观察者
		print_r("老师：离开了教室<br>");
		$teacher->notifyObservers();
	}

	/**
	 * observer demo2：事件委托雏形
	 */
	public function observer2() {
		//三个观察者
		$student1 = new \ObserverDemo2\Student1();
		$student2 = new \ObserverDemo2\Student2();
		$student3 = new \ObserverDemo2\Student3();
		//被观察者
		$teacher = new \ObserverDemo2\Teacher();
		//添加观察者
		$teacher->addObserver($student1 , 'playPhone');
		$teacher->addObserver($student2 , 'readNovel');
		$teacher->addObserver($student3 , 'chat');

		//通知观察者
		print_r("老师：离开了教室<br>");
		$teacher->notifyObservers();
	}

	/**
	 * observer demo3：事件委托实现
	 */
	public function observer3() {
		//三个监听者
		$student1 = new \ObserverDemo3\Student1();
		$student2 = new \ObserverDemo3\Student2();
		$student3 = new \ObserverDemo3\Student3();
		//被监听者
		$teacher = new \ObserverDemo3\Teacher();
		//添加监听者
		$teacher->addListener($student1 , 'readBook');
		$teacher->addListener($student2 , 'doHomework');
		$teacher->addListener($student3 , 'reciteWords');

		//通知监听者
		print_r("老师：进入了教室<br>");
		$teacher->notifyListeners();
	}

	public function observer4() {
		print_r("老师：进入了教室<br>");
		$this->hooks->call_hook('event_notifier_bus' , array(TEACHER_NOTIFIER , 'enter_classroom'));

		print_r("<br>");

		print_r("老师：离开了教室<br>");
		$this->hooks->call_hook('event_notifier_bus' , array(TEACHER_NOTIFIER , 'leave_classroom'));

		print_r("<br>");

		print_r("上课铃响了<br>");
		$this->hooks->call_hook('event_notifier_bus' , array(BELL_NOTIFIER , 'class_bell'));

		print_r("下课铃响了<br>");
		$this->hooks->call_hook('event_notifier_bus' , array(BELL_NOTIFIER , 'school_bell'));
	}
}