<?php


namespace Services\ClassAdapter;

/**
 * 目标角色之前的实现
 * Class ConcreteTarget
 * @package Services\ClassAdapter
 */
class ConcreteTarget implements Target
{

	public function request(): void {
		printr("目标角色的实现类，也就是它自己的行为");
	}
}
