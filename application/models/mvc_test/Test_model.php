<?php


class Test_model extends CI_Model
{
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_project_info_by_id($project_id) {
		$this->db->select("project_id,project_name,description");
		$this->db->where('project_id' , $project_id);
		$this->db->where('status' , 1);
		$query = $this->db->get('lg_project');
		return $query->first_row();
	}
}