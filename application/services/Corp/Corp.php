<?php


namespace Services\Corp;

/**
 * 抽象化角色，定义角色行为，保持一个对实现化角色的引用
 * Interface Corp
 */
abstract class Corp
{
	private $product;

	public function __construct(Product $product) {
		$this->product = $product;
	}

	/**
	 * 公司赚钱
	 */
	public function makeMoney(): void {
		//先生产
		$this->product->beProduced();
		//再销售
		$this->product->beSold();
	}
}
