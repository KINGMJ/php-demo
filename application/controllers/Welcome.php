<?php

use Services\ClassAdapter\Adapter;
use Services\ClassAdapter\ConcreteTarget;
use Services\ObjectAdapter\Adaptee;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 类适配器
	 */
	public function index() {
		//原有的业务逻辑
		$target = new ConcreteTarget();
		$target->request();

		//增加了适配器角色后的业务逻辑
		$target2 = new Adapter();
		$target2->request();
	}

	/**
	 * 对象适配器，跟类适配器不一样的地方是通过传入对象实现的
	 * 大部分情况下都会使用这种
	 */
	public function index2() {
		$adaptee = new Adaptee();
		$target2 = new Services\ObjectAdapter\Adapter($adaptee);
		$target2->request();
	}
}
