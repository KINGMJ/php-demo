<?php

use Services\Bridge\ConcreteImplementor1;
use Services\Bridge\RefinedAbstraction;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 桥接模式具体实现
	 */
	public function index() {
		//定义一个实现化角色
		$imp = new ConcreteImplementor1();
		//定义一个抽象化角色
		$abs = new RefinedAbstraction($imp);
		$abs->request();
	}
}
