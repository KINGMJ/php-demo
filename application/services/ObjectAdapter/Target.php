<?php

namespace Services\ObjectAdapter;

/**
 * 目标角色，该角色定义把其他类转换为何种接口，也就是我们的期望接口。
 * Interface Target
 * @package Services\ObjectAdapter
 */
interface Target
{
	//目标角色有自己的方法
	public function request(): void;
}
