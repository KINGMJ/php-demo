<?php

use Services\WebsiteFlyweight\User;
use Services\WebsiteFlyweight\WebsiteFactory;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	public function index() {

	}

	public function index2() {
		$factory = new WebsiteFactory();
		$website1 = $factory->getFlyWeight("产品展示");
		$website1->use(new User("小菜"));

		$website2 = $factory->getFlyWeight("产品展示");
		$website2->use(new User("大鸟"));

		$website3 = $factory->getFlyWeight("博客");
		$website3->use(new User("张三"));

		$website4 = $factory->getFlyWeight("博客");
		$website4->use(new User("李四"));

		//虽然有4个网站，但实际上只有两个网站实例，这种方式大大减少了对象的创建个数
		printr($factory->getFlyWeightsCount());
	}
}
