<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Services\User;

require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{


	public function index() {
		$aninam = new Services\Animal\Animal();
		$aninam->index();

		$user = new User();
		$user->index();
	}
}
