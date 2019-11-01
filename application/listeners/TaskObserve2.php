<?php


namespace Listeners;

class TaskObserve2
{
	function __construct() {

	}

	public function handle_task_copy($params) {
		print_r($params);
	}

	public function handle_task_move($params) {
		print_r("卡片移动了啊");
	}
}