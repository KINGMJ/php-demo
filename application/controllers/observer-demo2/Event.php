<?php

namespace ObserverDemo2;


class Event
{
	private $object;        //要执行方法的对象
	private $methodName;    //要执行方法的名称

	function __construct($object , $methodName) {
		$this->object = $object;
		$this->methodName = $methodName;
	}

	public function invoke() {
		$object = $this->object;
		$method = $this->methodName;
		$object->$method();
	}
}