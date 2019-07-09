<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function index()
    {
        phpinfo();
        exit;
        $this->load->view('welcome_message');
    }

    public function db_test()
    {
        $this->load->model('test_m');
        $user = $this->test_m->test1();
        print_r($user);
    }
}
