<?php


namespace Services\Chain;


class ConcreteHandler3 extends Handler
{

	protected function getHandlerLevel(): int {
		return Level::$LEVEL3;
	}

	protected function echo(Request $request): Response {
		return new Response("Level3 处理信息");
	}
}
