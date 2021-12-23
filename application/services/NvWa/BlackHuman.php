<?php


namespace Services\NvWa;


abstract class BlackHuman implements Human
{

	public function getColor(): string {
		return "黑色";
	}

	public function talk(): void {
		printr("我是黑人，我的肤色是" . self::getColor() . "，我的性别是" . $this->getSex());
	}

	public abstract function getSex(): string;
}
