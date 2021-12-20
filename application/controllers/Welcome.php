<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Services\User;

require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function index() {
		$userMapper = new User\UserMapper();
		$user = $userMapper->findById(1);
		if ( ! empty($user)) {
			print_r($user->getName() . ', ' . $user->getEmail());
		}
	}
}
