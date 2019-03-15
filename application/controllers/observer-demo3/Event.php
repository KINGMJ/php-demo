<?php

namespace ObserverDemo3;

/**
 * 事件
 * Class Event
 * @package ObserverDemo3
 */
class Event
{
	private $object;        //要执行方法的对象
	private $methodName;    //要执行方法的名称

	function __construct($object , $methodName) {
		$this->object = $object;
		$this->methodName = $methodName;
	}

	//方法调用，实现类似.net 的 delegate功能
	public function invoke() {
		$object = $this->object;
		$method = $this->methodName;
		$object->$method();
	}
}