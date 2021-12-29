<?php

namespace Services\Observer3;

/**
 * 事件通知器接口
 * Interface Observable
 */
interface Notifier
{
	//添加一个监听者
	public function addListener($object , $method);

	//通知所有的监听者
	public function notifyListeners();
}
