<?php


namespace Services\FactoryMethod;


class ProductAFactory implements IAbstractFactory
{

	public function makeProduct() {
		printr("开始创建产品A...");
		return new ConcreteProductA();
	}
}
