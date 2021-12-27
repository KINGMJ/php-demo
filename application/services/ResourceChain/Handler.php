<?php

namespace Services\ResourceChain;

abstract class Handler
{
	//下一个处理者
	protected $nextHandler;

	//设置下一个处理者是谁
	public function setNext(Handler $handler): void {
		$this->nextHandler = $handler;
	}

	//每一个处理者都有一个处理级别
	protected abstract function getHandlerLevel(): int;

	/**
	 * 处理请求，检查资源是否存在
	 * @param Request $request
	 * @return object
	 */
	public abstract function handleMessage(Request $request): object;

}
