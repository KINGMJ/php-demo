<?php


use Services\Drive\Benz;
use Services\Drive\Driver;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 反模式：新增一个宝马类，需要修改Driver类
	 */
	public function index() {
		$jack = new Driver();
		$benz = new Benz();
		$jack->drive($benz);
	}

	/**
	 * 依赖倒置，面向接口编程。新增一个宝马类，不需要改动Driver类
	 */
	public function index2() {
		$jack = new Services\Drive2\Driver();
		$benz = new Services\Drive2\Benz();
		$jack->drive($benz);

		$bmw = new Services\Drive2\BMW();
		$jack->drive($bmw);
	}
}
