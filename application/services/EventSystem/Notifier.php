<?php

namespace Services\EventSystem;

/**
 * 事件通知器接口，也就是被观察对象
 * Interface Notifier
 */
interface Notifier
{
	//添加一个监听者
	public function addListener($object , $method , $params = []): void;

	//通知所有的监听者
	public function notifyListeners(): void;
}
