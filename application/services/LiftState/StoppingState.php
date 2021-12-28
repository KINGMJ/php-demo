<?php


namespace Services\LiftState;

/**
 * 停止状态，可以开门、运行
 * Class StoppingState
 * @package Services\LiftState
 */
class StoppingState extends LiftState
{

	public function open(): void {
		$this->context->setLiftState(Context::$OPENING_STATE);
		$this->context->getLiftState()->open();
	}

	public function close(): void {
		// TODO: Implement close() method.
	}

	public function run(): void {
		$this->context->setLiftState(Context::$RUNNING_STATE);
		$this->context->getLiftState()->run();
	}

	public function stop(): void {
		printr("电梯停止运行...");
	}
}
