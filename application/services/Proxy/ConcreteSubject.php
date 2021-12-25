<?php


namespace Services\Proxy;

/**
 * 真实的主题类
 * Class ConcreteSubject
 * @package Services\Proxy
 */
class ConcreteSubject implements Subject
{

	public function request(): void {
		printr("真实主题类做的事情...");
	}
}
