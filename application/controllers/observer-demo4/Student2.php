<?php

namespace ObserverDemo4;

/**
 * 学生2，观察者
 * Class Student2
 */
class Student2
{
	public function readNovel() {
		print_r("学生二：观察到老师走了，开始看小说<br>");
	}

	public function doHomework() {
		print_r("学生二：观察到老师来了，开始写作业<br>");
	}

	public function cleanBoard() {
		print_r("学生二：听到上课铃响了，开始擦黑板<br>");
	}

	public function gotoTheBathroom() {
		print_r("学生二：听到下课铃响了，开始去厕所<br>");
	}
}