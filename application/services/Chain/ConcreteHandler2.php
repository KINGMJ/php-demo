<?php


namespace Services\Chain;


class ConcreteHandler2 extends Handler
{

	protected function getHandlerLevel(): int {
		return Level::$LEVEL2;
	}

	protected function echo(Request $request): Response {
		return new Response("Level2 处理信息");
	}
}
