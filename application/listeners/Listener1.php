<?php

namespace Listeners;

class Listener1 extends Listener
{
	public function __construct() {
		parent::__construct();
	}

	public function handle_task_copy($params) {
		printr("监听者1开始执行");
		printr($params);
	}
}
