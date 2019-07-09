<?php
/**
 * Created by PhpStorm.
 * User: jerry.mei
 * Date: 2019/7/4
 * Time: 20:59
 */

class Test_m extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function test1()
    {
        $this->db->select('user_id,email');
        $this->db->where('user_id', 1);
        $query = $this->db->get('lg_user_email');
        return $query->row_array();
    }
}