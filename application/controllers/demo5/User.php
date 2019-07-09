<?php
/**
 * Created by PhpStorm.
 * User: jerry.mei
 * Date: 2019/7/9
 * Time: 22:04
 */

namespace demo5;

require_once 'IUserBiz.php';
require_once 'IUserBo.php';

class User implements IUserBo, IUserBiz
{

    private $userId;
    private $userName;
    private $userList;

    function __construct()
    {
        $this->userList = [];
    }

    /**
     * 新增用户
     * @param IUserBo $userBo
     */
    public function addUser(IUserBo $userBo)
    {
        $user = array(
            'id' => $userBo->getUserID(),
            'name' => $userBo->getUserName()
        );
        array_push($this->userList, $user);
    }

    /**
     * 删除用户
     * @param $userId
     */
    public function deleteUser($userId)
    {
        $key = array_search($userId, array_column($this->userList, 'id'));
        array_splice($this->userList, $key, 1);
    }

    /**
     * 更新用户信息
     * @param IUserBo $userBo
     */
    public function updateUser(IUserBo $userBo)
    {
        $userId = $userBo->getUserID();
        $userName = $userBo->getUserName();
        $key = array_search($userId, array_column($this->userList, 'id'));
        $this->userList[$key]['name'] = $userName;
    }

    /**
     * 设置用户ID
     * @param int $userID
     * @return User
     */
    public function setUserID($userID)
    {
        $this->userId = $userID;
        return $this;
    }

    /**
     * 获取用户ID
     * @return int
     */
    public function getUserID()
    {
        return $this->userId;
    }

    /**
     * 设置用户名
     * @param $userName
     * @return User
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * 获取用户名
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return array
     */
    public function getUserList(): array
    {
        return $this->userList;
    }

    /**
     * @param array $userList
     */
    public function setUserList(array $userList): void
    {
        $this->userList = $userList;
    }

    /**
     * 查询用户
     * @param int $id
     * @return $this|null
     */
    public function findById(int $id)
    {
        $userArray = $this->filterByValue($this->userList, 'id', $id);
        if (empty($userArray)) {
            return null;
        }
        $userArray = array_values($userArray);
        $this->setUserID($userArray[0]['id'])
            ->setUserName($userArray[0]['name']);
        return $this;
    }

    /**
     * 根据二维数组某个字段的值查找数组
     * @param $array
     * @param $index
     * @param $value
     * @return mixed
     */
    private function filterByValue($array, $index, $value)
    {
        $newArray = [];
        if (is_array($array) && count($array) > 0) {
            foreach (array_keys($array) as $key) {
                $temp[$key] = $array[$key][$index];
                if ($temp[$key] == $value) {
                    $newArray[$key] = $array[$key];
                }
            }
        }
        return $newArray;
    }
}