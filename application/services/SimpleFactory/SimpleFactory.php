<?php

namespace Services\SimpleFactory;


/**
 * 简单工厂类
 * Class SimpleFactory
 * @package Services\SimpleFactory
 */
class SimpleFactory
{
	public static $PRODUCT_A = 0;
	public static $PRODUCT_B = 1;
	public static $PRODUCT_C = 2;

	/**
	 * 静态方法，用于创建具体的类
	 * @param $product_kind
	 * @return ConcreteProductA|ConcreteProductB|ConcreteProductC|null
	 */
	public static function makeProduct($product_kind) {
		switch ($product_kind) {
			case self::$PRODUCT_A:
				return new ConcreteProductA();
			case self::$PRODUCT_B:
				return new ConcreteProductB();
			case self::$PRODUCT_C:
				return new ConcreteProductC();
			default:
				return NULL;
		}
	}
}
