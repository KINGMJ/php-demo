<?php

use Services\CountGirl\GroupLeader;
use Services\CountGirl\Teacher;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 迪米特法则的反模式，Teacher应该只跟GroupLeader交流
	 */
	public function index() {
		$teacher = new Teacher();
		$teacher->command(new GroupLeader());
	}

	/**
	 * 运用迪米特法则之后的例子
	 */
	public function index2() {
		$girls = [];
		for ($i = 0; $i < 20; $i++) {
			array_push($girls , new \Services\CountGirl2\Girl());
		}
		$teacher = new \Services\CountGirl2\Teacher();
		$teacher->command(new \Services\CountGirl2\GroupLeader($girls));

	}
}
