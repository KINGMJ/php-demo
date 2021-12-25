<?php


namespace Services\TransparentComposite;


use Exception;

class Leaf implements Component
{

	public function doSomething(): void {
		printr("叶子节点干的事情");
	}

	/**
	 * @throws Exception
	 */
	public function add(Component $component): void {
		throw new Exception("不支持该方法");
	}

	/**
	 * @throws Exception
	 */
	public function remove(Component $component): void {
		throw new Exception("不支持该方法");
	}

	/**
	 * @throws Exception
	 */
	public function getChildren(): array {
		throw new Exception("不支持该方法");
	}
}
