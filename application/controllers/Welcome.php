<?php

use Services\LiftState\Context;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	public function index() {
		$context = new Context();
		$context->setLiftState(Context::$CLOSING_STATE);
		$context->open();
		$context->close();
		$context->run();
		$context->stop();
	}
}
