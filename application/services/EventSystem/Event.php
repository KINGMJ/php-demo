<?php

namespace Services\EventSystem;

/**
 * 事件，利用反射机制实现
 * Class Event
 * @package Services\EventSystem
 */
class Event
{
	private $object;        //要执行方法的对象
	private $methodName;    //要执行方法的名称
	private $params;        //要执行方法的参数

	function __construct($object , $methodName , $params) {
		$this->object = $object;
		$this->methodName = $methodName;
		$this->params = $params;
	}

	//方法调用，实现类似.net 的 delegate功能
	public function invoke() {
		$object = $this->object;
		$method = $this->methodName;
		//是否传递参数
		if (empty($this->params)) {
			$object->$method();
		} else {
			$object->$method($this->params);
		}
	}
}
