<?php

namespace Services\Observer3;

/**
 * 学生3，观察者
 * Class Student3
 */
class Student3
{
	public function chat() {
		printr("学生三：观察到老师走了，开始跟别人聊天");
	}

	public function reciteWords() {
		printr("学生三：观察到老师来了，开始背单词");
	}
}
