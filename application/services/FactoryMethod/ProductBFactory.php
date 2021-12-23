<?php


namespace Services\FactoryMethod;



class ProductBFactory implements IAbstractFactory
{

	public function makeProduct() {
		printr("开始创建产品B");
		return new ConcreteProductB();
	}
}