<?php

namespace Services\Proxy;

/**
 * 抽象主题
 * Interface Subject
 * @package Services\Proxy
 */
interface Subject
{
	//定义一个方法
	public function request(): void;
}
