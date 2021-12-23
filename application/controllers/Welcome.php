<?php

use Services\Builder\ConcreteBuilder;
use Services\Builder\Director;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 建造者模式示例
	 */
	public function index() {
		$builder = new ConcreteBuilder();
		$director = new Director($builder);
		$product = $director->getAProduct();
		$product->show();
	}

	/**
	 * 建造者的具体案例，造车，包含建造顺序
	 */
	public function index2() {
		$director = new Services\BuildCar\Director();
		//造1量A类型的奔驰车
		$director->getABenzModel()->run();
		//造1量B类型的奔驰车
		$director->getBBenzModel()->run();
		//造1量C类型的奔驰车
		$director->getCBMWModel()->run();
	}
}
