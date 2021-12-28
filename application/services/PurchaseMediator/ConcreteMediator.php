<?php


namespace Services\PurchaseMediator;


class ConcreteMediator extends Mediator
{

	//中介者最重要的方法
	public function execute($message , ...$args) {
		switch ($message) {
			case "purchase.buy": //采购电脑
				$this->buyComputer((int)$args[0]);
				break;
			case "sale.sell": //销售电脑
				$this->sellComputer((int)$args[0]);
				break;
			case "sale.offSale": //折价销售
				$this->offSale();
				break;
			case "stock.clear": //清仓处理
				$this->clearStock();
				break;
			default:
				break;
		}
	}

	private function buyComputer(int $number) {
		$saleStatus = $this->sale->getSaleStatus();
		if ($saleStatus > 80) { //销售情况良好
			printr("采购IBM电脑:" . $number . "台");
			$this->stock->increase($number);
		} else { //销售情况不好
			$buyNumber = $number / 2; //折半采购
			printr("采购IBM电脑： " . $buyNumber . "台");
		}
	}

	private function sellComputer(int $number) {
		if ($this->stock->getStockNumber() < $number) { //库存数量不够销售
			$this->purchase->buyIBMcomputer($number);
		}
		$this->stock->decrease($number);
	}

	private function offSale() {
		printr("折价销售IBM电脑" . $this->stock->getStockNumber() . "台");
	}

	private function clearStock() {
		//要求清仓销售
		$this->sale->offSale();
		//要求采购人员不要采购
		$this->purchase->refuseBuyIBM();
	}
}
