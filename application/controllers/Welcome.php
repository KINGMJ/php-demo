<?php

use Services\Emperor\Emperor;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 单例模式实现
	 */
	public function index() {
		$emperor = Emperor::getInstance();
		$emperor::say();

		$emperor2 = Emperor::getInstance();
		printr($emperor === $emperor2);
	}
}
