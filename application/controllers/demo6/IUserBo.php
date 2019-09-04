<?php
/**
 * Created by PhpStorm.
 * User: jerry.mei
 * Date: 2019/7/9
 * Time: 21:31
 */

namespace demo6;

interface IUserBo
{
	/**
	 * 设置用户ID
	 * @param int $userID
	 */
	public function setUserID(int $userID);

	/**
	 * 获取用户ID
	 * @return int
	 */
	public function getUserID();

	/**
	 * 设置用户名
	 * @param string
	 */
	public function setUserName(string $userName);

	/**
	 * 获取用户名
	 * @return string
	 */
	public function getUserName();

	/**
	 * 用户列表
	 * @return array
	 */
	public function getUserList();

	/**
	 * 设置用户列表
	 * @param array
	 */
	public function setUserList(array $userList);
}