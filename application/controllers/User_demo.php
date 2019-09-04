<?php

require_once 'demo5/User.php';
require_once 'demo6/Autoloader.php';

use demo5\User;
use demo6\UserBiz;

/**
 * Created by PhpStorm.
 * User: jerry.mei
 * Date: 2019/7/9
 * Time: 22:06
 */
class User_demo extends CI_Controller
{

	public function index() {
		//新增用户
		$user = new User();
		$user->setUserID('1')
			->setUserName('Jack');
		$user->addUser($user);

		$user->setUserID('2')
			->setUserName('Mike');
		$user->addUser($user);

		$user->setUserID('3')
			->setUserName('Marry');
		$user->addUser($user);

		print_r("===========新增用户==========<pre>");
		print_r($user->getUserList());
		print_r("</pre>");

		//查询用户
		$user = $user->findById(2);
		print_r("===========查询用户==========<pre>");
		print_r('用户id：' . $user->getUserID() . "，");
		print_r('用户姓名：' . $user->getUserName() . "</pre>");

		//修改用户
		$user->setUserName('Jackson');
		$user->updateUser($user);
		print_r("===========更新用户==========<pre>");
		print_r($user->getUserList());
		print_r("</pre>");

		//删除用户
		$user->deleteUser(3);
		print_r("===========删除用户==========<pre>");
		print_r($user->getUserList());
		print_r("</pre>");
	}

	public function index2() {
		$userBiz = new UserBiz();
		$userBo = $userBiz->getUserBo();
		$userBo->setUserID('1')
			->setUserName('Jack');
		$userBiz->addUser($userBo);

		$userBo->setUserID('2')
			->setUserName('Mike');
		$userBiz->addUser($userBo);

		$userBo->setUserID('3')
			->setUserName('Marry');
		$userBiz->addUser($userBo);

		print_r("===========新增用户==========<pre>");
		print_r($userBo->getUserList());
		print_r("</pre>");

		//查询用户
		$userBo = $userBiz->findById(2);
		print_r("===========查询用户==========<pre>");
		print_r('用户id：' . $userBo->getUserID() . "，");
		print_r('用户姓名：' . $userBo->getUserName() . "</pre>");
	}
}