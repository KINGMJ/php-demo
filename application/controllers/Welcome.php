<?php

use Services\Mediator\ConcreteColleague1;
use Services\Mediator\ConcreteColleague2;
use Services\Mediator\ConcreteMediator;

defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();
	}

	/**
	 * 中介者模式1：处理两个同事之间的交流
	 */
	public function index() {
		//实例化一个中介者
		$mediator = new ConcreteMediator();
		//实例化两个同事类
		$colleague1 = new ConcreteColleague1($mediator);
		$colleague2 = new ConcreteColleague2($mediator);
		//中介者设置好对应的同事
		$mediator->setC1($colleague1);
		$mediator->setC2($colleague2);

		//同事1通过中介者跟同事2打交道
		$colleague1->send("你吃饭了吗");
		$colleague2->send("我吃了，你呢？");
	}

	//中介者模式案例：通过中介者处理销售、采购和库存的关系
	public function index2() {
		$mediator = new \Services\PurchaseMediator\ConcreteMediator();
		//采购人员采购电脑
		printr("------采购人员采购电脑------");
		$purchase = $mediator->getPurchase();
		$purchase->buyIBMComputer(100);
		//销售人员开始买电脑
		printr("------销售人员开始买电脑------");
		$sale = $mediator->getSale();
		$sale->sellIBMComputer(1);
		//库房管理人员管理库存
		printr("------库房管理人员清库处理------");
		$stock = $mediator->getStock();
		$stock->clearStock();
	}
}
