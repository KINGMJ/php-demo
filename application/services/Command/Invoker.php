<?php


namespace Services\Command;

/**
 * 调用者类
 * Class Invoker
 * @package Services\Command
 */
class Invoker
{
	// Invoker 持有 command 对象
	private $command;

	public function setCommand(Command $command) {
		$this->command = $command;
	}

	public function action(): void {
		$this->command->execute();
	}
}
