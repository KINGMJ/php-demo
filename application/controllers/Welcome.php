<?php

use Services\Observer1\Student1;
use Services\Observer1\Student2;
use Services\Observer1\Student3;
use Services\Observer1\Teacher;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 观察者模式1：最简单的模式
	 */
	public function index() {
		//三个观察者
		$student1 = new Student1();
		$student2 = new Student2();
		$student3 = new Student3();
		//被观察者
		$teacher = new Teacher();
		//添加观察者
		$teacher->add($student1);
		$teacher->add($student2);
		$teacher->add($student3);

		//通知观察者
		printr("老师：离开了教室");
		$teacher->notifyObservers();

		//学生3请假回家了，不再观察
		$teacher->remove($student3);
		printr("老师：再次离开了教室");
		$teacher->notifyObservers();
	}

	/**
	 * 观察者模式2：观察者实现不同的方法，php中可以用反射来实现
	 */
	public function index2() {
		//三个观察者
		$student1 = new \Services\Observer2\Student1();
		$student2 = new \Services\Observer2\Student2();
		$student3 = new \Services\Observer2\Student3();
		//被观察者
		$teacher = new \Services\Observer2\Teacher();
		//添加观察者
		$teacher->add($student1 , 'playPhone');
		$teacher->add($student2 , 'readNovel');
		$teacher->add($student3 , 'chat');

		//通知观察者
		printr("老师：离开了教室");
		$teacher->notifyObservers();
	}

	public function index3() {
		//三个监听者
		$student1 = new \Services\Observer3\Student1();
		$student2 = new \Services\Observer3\Student2();
		$student3 = new \Services\Observer3\Student3();
		//被监听者
		$teacher = new \Services\Observer3\Teacher();
		//添加监听者
		$teacher->addListener($student1 , 'readBook');
		$teacher->addListener($student2 , 'doHomework');
		$teacher->addListener($student3 , 'reciteWords');

		//通知监听者
		printr("老师：进入了教室");
		$teacher->notifyListeners();
	}
}
