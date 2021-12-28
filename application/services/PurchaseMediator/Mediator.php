<?php

namespace Services\PurchaseMediator;

/**
 * 抽象中介者类
 * Class Mediator
 */
abstract class Mediator
{
	//同事类实例：采购
	protected $purchase;
	//销售
	protected $sale;
	//存货
	protected $stock;

	public function __construct() {
		//同事类通过构造函数传入中介者类
		$this->purchase = new Purchase($this);
		$this->sale = new Sale($this);
		$this->stock = new Stock($this);
	}

	//中介者最重要的方法叫做事件方法，处理多个对象之间的关系
	public abstract function execute($message , ...$args);

	/**
	 * @return Purchase
	 */
	public function getPurchase(): Purchase {
		return $this->purchase;
	}

	/**
	 * @return Sale
	 */
	public function getSale(): Sale {
		return $this->sale;
	}

	/**
	 * @return Stock
	 */
	public function getStock(): Stock {
		return $this->stock;
	}
}
