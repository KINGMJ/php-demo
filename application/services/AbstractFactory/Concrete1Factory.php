<?php


namespace Services\AbstractFactory;

/**
 * 生产产品族1
 * Class Concrete1Factory
 * @package Services\AbstractFactory
 */
class Concrete1Factory implements IAbstractFactory
{
	public function makeProductA(): Product1A {
		return new Product1A();
	}

	public function makeProductB(): Product1B {
		return new Product1B();
	}
}
