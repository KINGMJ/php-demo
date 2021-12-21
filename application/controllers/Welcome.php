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
	 * 依赖倒置，面向接口编程。新增一个宝马类，不需要改动Driver类，
	 * 使用接口声明方式注入传递依赖对象，也叫接口注入，另外还有两种如下：
	 */
	public function index2() {
		$jack = new Services\Drive2\Driver();
		$benz = new Services\Drive2\Benz();
		$jack->drive($benz);

		$bmw = new Services\Drive2\BMW();
		$jack->drive($bmw);
	}

	/**
	 * 使用接构造函数传递依赖对象，
	 * 还有一种是使用setter，跟这个类似，感觉最好还是使用接口注入这种。
	 */
	public function index3() {
		$benz = new Services\Drive3\Benz();
		$jack_drive_benz = new Services\Drive3\Driver($benz);

		$jack_drive_benz->drive();

		$bmw = new Services\Drive3\BMW();
		$jack_drive_bmw = new Services\Drive3\Driver($bmw);
		$jack_drive_bmw->drive();
	}
}
