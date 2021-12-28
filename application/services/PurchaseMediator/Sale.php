<?php


namespace Services\PurchaseMediator;


class Sale extends Colleague
{

	//销售IBM电脑
	public function sellIBMComputer(int $number) {
		$this->mediator->execute("sale.sell" , $number);
		printr("销售IBM电脑" . $number . "台");
	}

	//反馈销售情况， 0～100变化， 0代表根本就没人买， 100代表非常畅销， 出一个卖一个
	public function getSaleStatus(): int {
		$saleStatus = mt_rand(0 , 100);
		printr("IBM电脑的销售情况为： " . $saleStatus);
		return $saleStatus;
	}

	//折价处理
	public function offSale() {
		$this->mediator->execute("sale.offSale");
	}
}
