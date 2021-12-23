<?php

use Services\AbstractFactory\Concrete1Factory;
use Services\AbstractFactory\Concrete2Factory;
use Services\FactoryMethod\ProductAFactory;
use Services\FactoryMethod\ProductBFactory;
use Services\NvWa\FemaleFactory;
use Services\NvWa\MaleFactory;
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

	/**
	 * 抽象工厂
	 */
	public function index3() {
		$factory1 = new Concrete1Factory();
		$factory2 = new Concrete2Factory();

		//生产1a
		$product1A = $factory1->makeProductA();
		$product1A->show();

		//生产2b
		$product2B = $factory2->makeProductB();
		$product2B->show();
	}

	/**
	 * 抽象工厂的具体例子：女娲造人，两个维度：肤色和性别
	 */
	public function index4() {
		printr("男性生产线开始工作...");
		$maleFactory = new MaleFactory();
		$maleYellowHuman = $maleFactory->createYellowHuman();
		$maleYellowHuman->talk();

		printr("女性生产线开始工作...");
		$femaleFactory = new FemaleFactory();
		$femaleBlackHuman = $femaleFactory->createBlackHuman();
		$femaleBlackHuman->talk();
	}
}
