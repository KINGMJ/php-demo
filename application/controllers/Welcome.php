<?php

use Services\Command\ConcreteCommand1;
use Services\Command\ConcreteReceiver1;
use Services\Command\Invoker;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	public function index() {
		//初始化一个调用者
		$invoker = new Invoker();
		//初始化一个接收者
		$receiver = new ConcreteReceiver1();
		//定义一个发送给接收者的命令
		$command = new ConcreteCommand1($receiver);
		//把命令交给调用者去执行
		$invoker->setCommand($command);
		$invoker->action();
	}
}
