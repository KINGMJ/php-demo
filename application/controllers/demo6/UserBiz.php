<?php


namespace demo6;

/**
 * Class UserBiz
 * @package demo6
 * @see \demo6\UserBo
 */
class UserBiz implements IUserBiz
{
	/**
	 * @var UserBo
	 */
	private $userBo;

	/**
	 * 查询用户
	 * @param int $id
	 * @return UserBo
	 */
	public function findById($id) {
		$userBo = $this->getUserBo();
		$userArray = $this->filterByValue($userBo->getUserList() , 'id' , $id);
		if (empty($userArray)) {
			return NULL;
		}
		$userArray = array_values($userArray);
		$userBo->setUserID($userArray[0]['id'])
			->setUserName($userArray[0]['name']);
		return $userBo;
	}

	/**
	 * 新增用户
	 * @param IUserBo $userBo
	 */
	public function addUser(IUserBo $userBo) {
		$user = array(
			'id' => $userBo->getUserID() ,
			'name' => $userBo->getUserName()
		);
		$userList = $userBo->getUserList();
		array_push($userList , $user);
		$userBo->setUserList($userList);
	}

	/**
	 * 删除用户
	 * @param IUserBo $userBo
	 */
	public function deleteUser(IUserBo $userBo) {
		// TODO: Implement deleteUser() method.
	}

	/**
	 * 更新用户信息
	 * @param IUserBo $userBo
	 */
	public function updateUser(IUserBo $userBo) {
		// TODO: Implement updateUser() method.
	}

	/**
	 * @return UserBo
	 */
	public function getUserBo() {
		if (is_null($this->userBo)) {
			$this->userBo = new UserBo();
		}
		return $this->userBo;
	}

	/**
	 * @param mixed $userBo
	 */
	public function setUserBo($userBo): void {
		$this->userBo = $userBo;
	}

	/**
	 * 根据二维数组某个字段的值查找数组
	 * @param $array
	 * @param $index
	 * @param $value
	 * @return mixed
	 */
	private function filterByValue($array , $index , $value) {
		$newArray = [];
		if (is_array($array) && count($array) > 0) {
			foreach (array_keys($array) as $key) {
				$temp[ $key ] = $array[ $key ][ $index ];
				if ($temp[ $key ] == $value) {
					$newArray[ $key ] = $array[ $key ];
				}
			}
		}
		return $newArray;
	}
}