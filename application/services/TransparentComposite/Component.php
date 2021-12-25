<?php

namespace Services\TransparentComposite;

/**
 * 抽象构建角色，透明模式不区分树枝跟叶子节点
 * Interface Component
 */
interface Component
{
	//个体和整体都具有的共享
	public function doSomething(): void;

	//增加一个叶子构件或树枝构件
	public function add(Component $component): void;

	//删除一个叶子构件或树枝构件
	public function remove(Component $component): void;

	//获取分支下的所有叶子构件或树枝构件
	public function getChildren(): array;
}
