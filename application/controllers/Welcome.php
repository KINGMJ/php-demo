<?php

use Services\Bridge\ConcreteImplementor1;
use Services\Bridge\RefinedAbstraction;
use Services\Corp\CheapCopyCorp;
use Services\Corp\House;
use Services\Corp\HouseCorp;
use Services\Corp\Ipod;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 桥接模式具体实现
	 */
	public function index() {
		//定义一个实现化角色
		$imp = new ConcreteImplementor1();
		//定义一个抽象化角色
		$abs = new RefinedAbstraction($imp);
		$abs->request();
	}

	/**
	 * 桥接模式的一个案例：
	 * 一个企业有房地产公司和山寨公司，它们都生产产品。房地产公司的产品是房子，山寨公司的产品是Ipod
	 */
	public function index2() {
		$house = new House();
		$houseCorp = new HouseCorp($house);
		$houseCorp->makeMoney();

		$ipod = new Ipod();
		$cheapCopyCorp = new CheapCopyCorp($ipod);
		$cheapCopyCorp->makeMoney();
	}
}
