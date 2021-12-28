<?php


namespace Services\PurchaseMediator;

/**
 * 采购类：具体同事类
 * Class Purchase
 * @package Services\PurchaseMediator
 */
class Purchase extends Colleague
{
	//采购IBM电脑
	public function buyIBMComputer(int $number): void {
		$this->mediator->execute("purchase.buy" , $number);
	}

	//不再采购IBM电脑
	public function refuseBuyIBM() {
		printr("不再采购IBM电脑");
	}
}
