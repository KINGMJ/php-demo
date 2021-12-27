<?php


namespace Services\WebsiteFlyweight;

/**
 * 非享元角色
 * Class User
 * @package Services\WebsiteFlyweight
 */
class User
{
	//外部状态
	private $name;

	public function __construct(string $name) {
		$this->name = $name;
	}

	public function getName(): string {
		return $this->name;
	}
}
