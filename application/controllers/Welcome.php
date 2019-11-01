<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index() {
		phpinfo();
		exit;
		$this->load->view('welcome_message');
	}

	public function db_test() {
		$this->load->model('test_m');
		$user = $this->test_m->test1();
		log_message("error" , var_export($user , TRUE));
	}

	//常量里面定义数组
	public function constant_array() {
		print_r(TEST_ARRAY);
	}


	public function observer_test() {
		$this->hooks->call_hook('event_notifier_bus2' , array('TaskMove' , [1 , 2 , 3]));
	}
}
