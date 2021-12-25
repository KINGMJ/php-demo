<?php


namespace Services\SafeComposite;


class Leaf implements Component
{

	public function doSomething(): void {
		printr("叶子节点干的事情");
	}
}
