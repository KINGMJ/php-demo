<?php


namespace Services\LiftState;

/**
 * 开启状态，只能进行关门操作
 * Class OpeningState
 * @package Services\LiftState
 */
class OpeningState extends LiftState
{

	//开启状态要实现的动作
	public function open(): void {
		printr("电梯门开启...");
	}

	public function close(): void {
		//开启状态可以关闭
		$this->context->setLiftState(Context::$CLOSING_STATE);
		//动作委托为ClosingState来执行
		$this->context->getLiftState()->close();
	}

	public function run(): void {
		// TODO: Implement run() method.
	}

	public function stop(): void {
		// TODO: Implement stop() method.
	}
}
