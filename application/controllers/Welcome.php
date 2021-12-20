<?php

use Services\Gun\HandGun;
use Services\Gun\Rifle;
use Services\Gun\Soldier;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$sanmao = new Soldier();
		$sanmao->setGun(new HandGun());
		$sanmao->killEnemy();

		$sanmao->setGun(new Rifle());
		$sanmao->killEnemy();
	}
}
