<?php


namespace Services\TransparentComposite;


class Composite implements Component
{
	//构件容器
	private $componentList = [];

	//增加一个叶子构件或树枝构件
	public function add(Component $component): void {
		array_push($this->componentList , $component);
	}

	//删除一个叶子构件或树枝构件
	public function remove(Component $component): void {
		$key = array_search($component , $this->componentList);
		if ( ! $key) {
			unset($this->componentList[ $key ]);
		}
	}

	//获取分支下的所有叶子构件或树枝构件
	public function getChildren(): array {
		return $this->componentList;
	}

	public function doSomething(): void {
		printr("树枝节点干的事情...");
	}
}
