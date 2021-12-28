<?php

namespace Services\Strategy;
/**
 * 策略接口
 * Interface IStrategy
 */
interface IStrategy
{
	//策略操作
	public function operate(): void;
}
