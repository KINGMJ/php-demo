<?php


namespace Services\PurchaseMediator;


class Stock extends Colleague
{

	private static $COMPUTER_NUMBER = 100;

	//库存增加
	public function increase(int $number) {
		self::$COMPUTER_NUMBER = self::$COMPUTER_NUMBER + $number;
		printr("库存数量为： " . self::$COMPUTER_NUMBER);
	}

	//库存降低
	public function decrease(int $number) {
		self::$COMPUTER_NUMBER = self::$COMPUTER_NUMBER - $number;
		printr("库存数量为： " . self::$COMPUTER_NUMBER);
	}

	//获得库存数量
	public function getStockNumber(): int {
		return self::$COMPUTER_NUMBER;
	}

	//存货压力大了， 就要通知采购人员不要采购， 销售人员要尽快销售
	public function clearStock() {
		printr("清理存货数量为： " . self::$COMPUTER_NUMBER);
		$this->mediator->execute("stock.clear");
	}
}
