<?php


namespace Services\Strategy;

/**
 * 具体策略1
 * Class BackDoor
 * @package Services\Strategy
 */
class BackDoor implements IStrategy
{

	public function operate(): void {
		printr("找乔国老帮忙， 让吴国太给孙权施加压力");
	}
}
