<?php

namespace ObserverDemo4;

/**
 * 学生1，观察者
 * Class Student1
 */
class Student1
{

	public function playPhone() {
		print_r("学生一：观察到老师走了，开始玩手机<br>");
	}

	public function readBook() {
		print_r("学生一：观察到老师来了，开始看书<br>");
	}

	public function runIntoClass() {
		print_r("学生一：听到上课铃响了，开始跑进教室<br>");
	}

	public function listenToMusic() {
		print_r("学生一：听到下课铃响了，开始听音乐<br>");
	}
}