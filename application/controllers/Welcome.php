<?php

use Services\Decorator\ConcreteComponent;
use Services\Decorator\ConcreteDecorator;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	public function index() {
		$component = new ConcreteComponent();
		$component->operation();

		//被装饰后的
		$componentB = new ConcreteDecorator($component);
		$componentB->operation();
	}
}
