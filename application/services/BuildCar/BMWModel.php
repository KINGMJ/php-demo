<?php

namespace Services\BuildCar;


class BMWModel extends CarModel
{
	protected function start(): void {
		printr("宝马车跑起来是这个样子的...");
	}

	protected function stop(): void {
		printr("宝马车应该这样停车...");
	}

	protected function alarm(): void {
		printr("宝马车的喇叭声音是这个样子的...");
	}

	protected function engineBoom(): void {
		printr("宝马车的引擎是这个声音的...");
	}
}
