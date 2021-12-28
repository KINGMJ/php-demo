<?php


namespace Services\Strategy;

/**
 * 环境类，持有一个策略类的引用，也就是诸葛亮的镜囊
 * Class Context
 * @package Services\Strategy
 */
class Context
{
	private $strategy;

	/**
	 * 设置要用那个策略
	 * @param mixed $strategy
	 */
	public function setStrategy(IStrategy $strategy): void {
		$this->strategy = $strategy;
	}

	/**
	 * 使用策略里的方法
	 */
	public function operate(): void {
		$this->strategy->operate();
	}
}
