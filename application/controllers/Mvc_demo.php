<?php


class Mvc_demo extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model('mvc_test/test_logic');
		$project_info = $this->test_logic->find_by_id(6146);
		print_r("<pre>");
		print_r($project_info);
	}
}