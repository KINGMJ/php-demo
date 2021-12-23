<?php


namespace Services\NvWa;


abstract class WhiteHuman implements Human
{


	public function getColor(): string {
		return "白色";
	}

	public function talk(): void {
		printr("我是白人，我的肤色是" . self::getColor() . "，我的性别是" . $this->getSex());
	}

	public abstract function getSex(): string;
}
