<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Services\User\User;
use Services\User\UserMapper;

require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	private $userMapper;

	public function __construct() {
		parent::__construct();
		$this->userMapper = new UserMapper();
	}

	public function index() {
		// Display user data
		$user = $this->userMapper->findById(1);
		if (empty($user)) {
			echo "没有找到该用户";
			return;
		}
		echo $user->getName() . ', ' . $user->getEmail();
	}

	public function insert() {
		// Insert a new user
		$user = new User("John.Doe" , "john@example.com");
		$this->userMapper->insert($user);
	}

	public function update() {
		// Update a user
		$user = $this->userMapper->findById(1);
		if (empty($user)) {
			echo "没有找到该用户";
		}
		$user->setName("Jack");
		$this->userMapper->update($user);
	}

	public function delete() {
		// Delete a user
		$this->userMapper->delete(1);
	}

}
