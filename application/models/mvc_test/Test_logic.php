<?php


class Test_logic extends CI_Model
{
	function __construct() {
		parent::__construct();
		$this->load->model('mvc_test/test_model');
		$this->load->helper('string');
	}

	//获取项目id测试
	function find_by_id($project_id) {
		$this->db->trans_start();
		$project_info = $this->test_model->get_project_info_by_id($project_id);
		$project_info->project_name = uncamelize($project_info->project_name);
		$this->db->trans_complete();
		return $project_info;
	}
}