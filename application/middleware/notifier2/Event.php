<?php

namespace Notifier2;

/**
 * 事件
 * Class Event
 * @package ObserverDemo3
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
		if (empty($this->params)) {
			$object->$method();
		} else {
			$object->$method($this->params);
		}
	}
}