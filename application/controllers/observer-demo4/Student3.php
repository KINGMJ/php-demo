<?php

namespace ObserverDemo4;

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

	public function rushToPlayground() {
		print_r("学生二：听到上课铃响了，冲向操场<br>");
	}

	public function goShopping() {
		print_r("学生二：听到下课铃响了，去小卖部买吃的<br>");
	}
}