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
}
