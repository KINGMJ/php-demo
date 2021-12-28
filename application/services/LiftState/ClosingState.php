<?php


namespace Services\LiftState;

/**
 * 关闭状态，可以开启、运行、停止
 * Class ClosingState
 * @package Services\LiftState
 */
class ClosingState extends LiftState
{
	//电梯门关了再打开
	public function open(): void {
		$this->context->setLiftState(Context::$OPENING_STATE);
		$this->context->getLiftState()->open();
	}

	//电梯门关闭， 这是关闭状态要实现的动作
	public function close(): void {
		printr("电梯门关闭...");
	}

	public function run(): void {
		$this->context->setLiftState(Context::$RUNNING_STATE);
		$this->context->getLiftState()->run();
	}

	public function stop(): void {
		$this->context->setLiftState(Context::$STOPPING_STATE);
		$this->context->getLiftState()->stop();
	}
}
