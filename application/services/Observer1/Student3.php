<?php

namespace Services\Observer1;

require_once 'Observer.php';

/**
 * 学生3，观察者
 * Class Student3
 */
class Student3 implements Observer
{
	public function update() {
		printr("学生三：观察到老师走了，开始跟别人聊天");
	}
}
