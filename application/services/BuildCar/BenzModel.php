<?php


namespace Services\BuildCar;


class BenzModel extends CarModel
{

	protected function start(): void {
		printr("奔驰车跑起来是这个样子的...");
	}

	protected function stop(): void {
		printr("奔驰车应该这样停车...");
	}

	protected function alarm(): void {
		printr("奔驰车的喇叭声音是这个样子的...");
	}

	protected function engineBoom(): void {
		printr("奔驰车的引擎是这个声音的...");
	}
}
