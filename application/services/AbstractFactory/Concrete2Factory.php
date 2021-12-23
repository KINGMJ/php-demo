<?php


namespace Services\AbstractFactory;

/**
 * 生产产品族2
 * Class Concrete1Factory
 * @package Services\AbstractFactory
 */
class Concrete2Factory implements IAbstractFactory
{
	public function makeProductA(): Product2A {
		return new Product2A();
	}

	public function makeProductB(): Product2B {
		return new Product2B();
	}
}
