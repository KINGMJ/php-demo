<?php

namespace Services\LiftState;

/**
 * 抽象状态类：电梯状态
 * Class LiftState
 * @package Services\LiftState
 */
abstract class LiftState
{
	//定义一个环境角色， 也就是封装状态的变化引起的功能变化
	protected $context;

	/**
	 * @param mixed $context
	 */
	public function setContext(Context $context): void {
		$this->context = $context;
	}

	//首先电梯门开启动作
	public abstract function open(): void;

	//电梯门有开启， 那当然也就有关闭了
	public abstract function close(): void;

	//电梯要能上能下， 运行起来
	public abstract function run(): void;

	//电梯还要能停下来
	public abstract function stop(): void;
}
