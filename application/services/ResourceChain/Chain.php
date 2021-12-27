<?php


namespace Services\ResourceChain;


class Chain
{
	//第一个处理者
	private $handler;

	public function __construct() {
		$boardHandler = new BoardHandler();
		$projectHandler = new ProjectHandler();
		$deptHandler = new DeptHandler();
		$entHandler = new EntHandler();

		//设置链的顺序
		$boardHandler->setNext($projectHandler);
		$projectHandler->setNext($deptHandler);
		$deptHandler->setNext($entHandler);

		//返回第一个处理者
		$this->handler = $boardHandler;

	}

	/**
	 * 获取第一个处理者
	 * @return Handler
	 */
	public function getHandler(): Handler {
		return $this->handler;
	}
}
