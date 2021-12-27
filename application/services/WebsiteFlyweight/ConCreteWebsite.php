<?php


namespace Services\WebsiteFlyweight;

/**
 * 具体享元类
 * Class ConCreteWebsite
 * @package Services\WebsiteFlyweight
 */
class ConCreteWebsite implements Website
{
	//内部状态
	private $key;

	public function __construct(string $key) {
		$this->key = $key;
	}

	public function use(User $user): void {
		printr("网站分类：" . $this->key . "；用户：" . $user->getName());
	}
}
