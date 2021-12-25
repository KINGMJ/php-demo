<?php

use Services\Proxy\ConcreteSubject;
use Services\Proxy\Proxy;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	public function index() {
		$subject = new ConcreteSubject();
		$proxy = new Proxy($subject);
		$proxy->request();
	}
}
