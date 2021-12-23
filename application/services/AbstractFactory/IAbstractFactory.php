<?php


namespace Services\AbstractFactory;


interface IAbstractFactory
{
	//生产产品A
	public function makeProductA();

	//生产产品B
	public function makeProductB();
}
