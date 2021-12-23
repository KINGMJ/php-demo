<?php

namespace Services\BuildCar;

abstract class CarModel
{
	private $sequence = [];

	/**
	 * 汽车启动的顺序
	 * @param array $sequence
	 */
	public final function setSequence(array $sequence): void {
		$this->sequence = $sequence;
	}

	//能发动
	protected abstract function start(): void;

	//能停止
	protected abstract function stop(): void;

	//喇叭
	protected abstract function alarm(): void;

	//引擎声音
	protected abstract function engineBoom(): void;

	//汽车运行过程
	public final function run() {
		foreach ($this->sequence as $sequence) {
			$this->seqRunMethods($sequence);
		}
	}

	/**
	 * 顺序地调用方法
	 * @param $sequence
	 */
	private function seqRunMethods($sequence) {
		switch ($sequence) {
			case "start":
				$this->start();
				break;
			case "stop":
				$this->stop();
				break;
			case "alarm":
				$this->alarm();
				break;
			case "engineBoom":
				$this->engineBoom();
				break;
			default:
				throw new \Error('传递的参数不对');
		}
	}
}


