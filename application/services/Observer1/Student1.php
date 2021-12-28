<?php

namespace Services\Observer1;


/**
 * 学生1，观察者
 * Class Student1
 */
class Student1 implements Observer
{
	public function update() {
		printr("学生一：观察到老师走了，开始玩手机");
	}
}
