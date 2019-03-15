<?php

namespace ObserverDemo4;

class Teacher1
{

	public function walkIntoClass() {
		print_r("老师一：听到上课铃响了，走进教室<br>");
	}

	public function leaveClass() {
		print_r("老师一：听到下课铃响了，离开教室<br>");
	}
}