<?php

namespace Services\Chain;

/**
 * 抽象处理者
 * Class Handler
 * @package Services\Chain
 */
abstract class Handler
{
	//下一个处理者
	private $nextHandler;

	//每个处理者必须对请求做出回应
	public final function handleMessage(Request $request) {
		$response = NULL;
		//判断是否是自己的处理级别
		if ($this->getHandlerLevel() == $request->getRequestLevel()) {
			$response = $this->echo($request);
		} else {//不属于自己的处理级别
			//判断是否有下一个处理者
			if ($this->nextHandler !== NULL) {
				$response = $this->nextHandler->handleMessage($request);
			} else {
				//没有适当的处理者，业务自行处理
			}
		}
		return $response;
	}

	//设置下一个处理者是谁
	public function setNext(Handler $handler): void {
		$this->nextHandler = $handler;
	}

	//每一个处理者都有一个处理级别
	protected abstract function getHandlerLevel(): int;

	protected abstract function echo(Request $request): Response;

}
