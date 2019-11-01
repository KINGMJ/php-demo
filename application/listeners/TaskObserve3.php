<?php


namespace Listeners;

class TaskObserve3
{
	function __construct() {

	}

	public function handle_task_copy($params) {
		print_r($params);
	}
}