<?php

use Services\FactoryMethod\ProductAFactory;
use Services\FactoryMethod\ProductBFactory;
use Services\SimpleFactory\SimpleFactory;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 简单工厂示例
	 */
	public function index() {
		printr("开始创建产品：");
		$productA = SimpleFactory::makeProduct(SimpleFactory::$PRODUCT_A);
		$productA->show();
		$productB = SimpleFactory::makeProduct(SimpleFactory::$PRODUCT_B);
		$productB->show();
		$productC = SimpleFactory::makeProduct(SimpleFactory::$PRODUCT_C);
		$productC->show();
	}

	/**
	 * 工厂方法示例
	 */
	public function index2() {
		$productA = (new ProductAFactory())->makeProduct();
		$productA->show();
		$productB = (new ProductBFactory())->makeProduct();
		$productB->show();
	}
}
