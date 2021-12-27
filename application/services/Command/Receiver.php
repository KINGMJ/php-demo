<?php

namespace Services\Command;

/**
 * 抽象接收者
 * Interface Receiver
 * @package Services\Command
 */
interface Receiver
{
	//定义每个接收者都要完成的动作
	public function action(): void;
}
