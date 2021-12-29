<?php

namespace Services\Observer2;

/**
 * 使用反射实现的一个事件类
 * Class Event
 * @package Services\Observer2
 */
class Event
{
	private $object;        //要执行方法的对象
	private $methodName;    //要执行方法的名称

	function __construct($object , $methodName) {
		$this->object = $object;
		$this->methodName = $methodName;
	}

	//执行的方法
	public function invoke() {
		$object = $this->object;
		$method = $this->methodName;
		$object->$method();
	}
}
