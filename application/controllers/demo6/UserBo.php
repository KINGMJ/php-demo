<?php


namespace demo6;


class UserBo implements IUserBo
{
	private $userId;
	private $userName;
	private $userList;

	public function __construct() {
		$this->userList = [];
	}


	/**
	 * 设置用户ID
	 * @param int $userID
	 * @return UserBo
	 */
	public function setUserID($userID) {
		$this->userId = $userID;
		return $this;
	}

	/**
	 * 获取用户ID
	 * @return int
	 */
	public function getUserID() {
		return $this->userId;
	}

	/**
	 * 设置用户名
	 * @param $userName
	 * @return UserBo
	 */
	public function setUserName($userName) {
		$this->userName = $userName;
		return $this;
	}

	/**
	 * 获取用户名
	 * @return string
	 */
	public function getUserName() {
		return $this->userName;
	}

	/**
	 * @return array
	 */
	public function getUserList(): array {
		return $this->userList;
	}

	/**
	 * @param array $userList
	 */
	public function setUserList(array $userList): void {
		$this->userList = $userList;
	}
}