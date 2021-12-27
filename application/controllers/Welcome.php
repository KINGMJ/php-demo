<?php

use Services\Chain\Chain;
use Services\Chain\Request;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 责任链模式标准实现
	 */
	public function index() {
		$handler = (new Chain())->getHandler();
		$response = $handler->handleMessage(new Request(2));
		printr($response->getMessage());
	}
}
