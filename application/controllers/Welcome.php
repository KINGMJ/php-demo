<?php

use Services\Chain\Chain;
use Services\Chain\Request;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 责任链模式标准实现
	 */
	public function index() {
		$handler = (new Chain())->getHandler();
		$response = $handler->handleMessage(new Request(2));
		printr($response->getMessage());
	}

	/**
	 * resource chain，看板系统的具体实现
	 * 在对看板进行操作时，需检查看板是否存在，项目是否存在，部门是否存在，企业是否存在
	 * 在对项目进行操作时，依次往上
	 */
	public function index2() {
		$request = new Services\ResourceChain\Request(2);
		//模拟资源存在情况
		$request->setBoardExists(TRUE);
		$request->setProjectExists(TRUE);
		$request->setDeptExists(TRUE);
		$request->setEntExists(FALSE);

		$handler = (new Services\ResourceChain\Chain())->getHandler();
		$response = $handler->handleMessage($request);
		printr($response->message);

	}
}
