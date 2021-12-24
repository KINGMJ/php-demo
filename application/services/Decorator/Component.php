<?php

namespace Services\Decorator;

/**
 * 抽象构件角色，也就是原本存在的
 * Interface Component
 */
interface Component
{
	public function operation(): void;
}
