<?php


namespace Services\LiftState;


/**
 * 运行状态，可以停止
 * Class RunningState
 * @package Services\LiftState
 */
class RunningState extends LiftState
{
	public function open(): void {
		// TODO: Implement open() method.
	}

	public function close(): void {
		// TODO: Implement close() method.
	}

	public function run(): void {
		printr("电梯上下运行...");
	}

	public function stop(): void {
		$this->context->setLiftState(Context::$STOPPING_STATE);
		$this->context->getLiftState()->stop();
	}
}
