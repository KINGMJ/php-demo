<?php

namespace Services\Observer3;

/**
 * 学生1，观察者
 * Class Student1
 */
class Student1
{

	public function playPhone() {
		printr("学生一：观察到老师走了，开始玩手机");
	}

	public function readBook() {
		printr("学生一：观察到老师来了，开始看书");
	}
}
