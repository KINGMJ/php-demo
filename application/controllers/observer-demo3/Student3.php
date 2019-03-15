<?php

namespace ObserverDemo3;

/**
 * 学生3，观察者
 * Class Student3
 */
class Student3
{
	public function chat() {
		print_r("学生三：观察到老师走了，开始跟别人聊天<br>");
	}

	public function reciteWords() {
		print_r("学生三：观察到老师来了，开始背单词<br>");
	}
}