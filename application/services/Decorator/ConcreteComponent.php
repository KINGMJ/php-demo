<?php


namespace Services\Decorator;

/**
 * 具体构件角色
 * Class ConcreteComponent
 * @package Services\Decorator
 */
class ConcreteComponent implements Component
{

	public function operation(): void {
		printr("具体的构件角色");
	}
}
