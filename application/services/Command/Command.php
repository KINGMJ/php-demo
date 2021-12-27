<?php


namespace Services\Command;

/**
 * 命令类
 * Interface Command
 * @package Services\Command
 */
interface Command
{
	//每个命令类都有个执行命令的方法
	public function execute(): void;
}
