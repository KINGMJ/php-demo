<?php


namespace Services\ClassAdapter;

/**
 * 源角色，你想把谁转换成目标角色，这个“谁”就是源角色，它是已经存在的、运行良好的类或对象，经过适配器角色的包装，它会成为一个崭新、靓丽的角色。
 * Class Adaptee
 * @package Services\ClassAdapter
 */
class Adaptee
{
	//原有的业务逻辑
	public function doSomething(): void {
		printr("源角色，之前的实现逻辑");
	}
}
