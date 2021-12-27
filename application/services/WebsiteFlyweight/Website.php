<?php

namespace Services\WebsiteFlyweight;

/**
 * 抽象享元角色
 * Interface Website
 * @package Services\WebsiteFlyweight
 */
interface Website
{
	public function use(User $user): void;
}
