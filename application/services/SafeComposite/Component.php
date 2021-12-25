<?php

namespace Services\SafeComposite;
/**
 * 抽象构建角色
 * Interface Component
 */
interface Component
{
	//个体和整体都具有的共享
	public function doSomething(): void;
}
