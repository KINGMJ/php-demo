<?php

/**
 * 用于占位，在控制器引入这个 model 以便可以获取到 CI 的 model 对象
 * Class Welcome_m
 */
class Welcome_m extends CI_Model
{
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
}
