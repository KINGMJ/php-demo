<?php

use Services\Strategy\BackDoor;
use Services\Strategy\BlockEnemy;
use Services\Strategy\Context;
use Services\Strategy\GivenGreenLight;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	public function index() {
		$context = new Context();
		printr("---刚刚到吴国的时候拆第一个---");
		$context->setStrategy(new BackDoor());
		$context->operate();

		printr("---刘备乐不思蜀了， 拆第二个了---");
		$context->setStrategy(new GivenGreenLight());
		$context->operate();

		printr("---孙权的小兵追来了， 咋办？ 拆第三个---");
		$context->setStrategy(new BlockEnemy());
		$context->operate();
	}
}
