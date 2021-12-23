<?php

namespace Services\NvWa;

interface Human
{
	//每个人总的肤色
	public function getColor(): string;

	//人类都会说话
	public function talk(): void;

	//每个人都有性别
	public function getSex(): string;
}
