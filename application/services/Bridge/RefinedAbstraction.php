<?php


namespace Services\Bridge;

/**
 * 具体抽象化角色
 * Class RefinedAbstraction
 * @package Services\Bridge
 */
class RefinedAbstraction extends Abstraction
{
	public function request(): void {
		parent::request();
		self::getImp()->doAnything();
	}
}
