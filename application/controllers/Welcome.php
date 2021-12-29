<?php
defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 事件系统demo
	 */
	public function index() {
		//触发TaskCopy触发事件
		$this->hooks->call_hook('event_notifier_bus' , array('TaskCopy' , [
			'board_id' => 123 ,
			'task_id' => 456
		]));
	}
}
