<?php

use Services\PostLetterFacade\LetterProcessImpl;
use Services\PostLetterFacade\ModernPostOffice;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	/**
	 * 不使用门面模式
	 */
	public function index() {
		//创建一个处理信件的过程
		$letterProcess = new LetterProcessImpl();
		//开始写信
		$letterProcess->writeContext("Hello,It's me,do you know who I am? I'm...");
		//开始写信封
		$letterProcess->fillEnvelope("Happy Road No.666,God Province,Heaven");
		//把信放到信封里， 并封装好
		$letterProcess->letterIntoEnvelope();
		//跑到邮局把信塞到邮箱， 投递
		$letterProcess->sendLetter();
	}

	/**
	 * 门面模式的具体案例：使用邮局作为Facade来进行写信处理
	 */
	public function index2() {
		//现代化的邮局， 有这项服务， 邮局名称叫Hell Road
		$hellRoadPostOffice = new ModernPostOffice();
		//你只要把信的内容和收信人地址给他， 他会帮你完成一系列的工作
		//定义一个地址
		$address = "Happy Road No. 666,God Province,Heaven";
		//信的内容
		$context = "Hello,It's me,do you know who I am? I'm your old friend";
		//你给我发送吧
		$hellRoadPostOffice->sendLetter($context , $address);
	}
}
