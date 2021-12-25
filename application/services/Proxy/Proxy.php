<?php


namespace Services\Proxy;

/**
 * 代理类
 * Class Proxy
 * @package Services\Proxy
 */
class Proxy implements Subject
{
	private $subject;

	public function __construct(Subject $subject) {
		$this->subject = $subject;
	}

	public function request(): void {
		$this->beforeRequest();
		$this->subject->request();
		$this->afterRequest();
	}

	private function beforeRequest() {
		printr("预处理");
	}

	private function afterRequest() {
		printr("善后处理");
	}
}
