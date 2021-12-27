<?php


namespace Services\Chain;

/**
 * 具体处理者
 * Class ConcreteHandler1
 * @package Services\Chain
 */
class ConcreteHandler1 extends Handler
{

	protected function getHandlerLevel(): int {
		return Level::$LEVEL1;
	}

	protected function echo(Request $request): Response {
		return new Response("Level1 处理信息");
	}
}
