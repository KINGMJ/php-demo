<?php
/**
 * Created by PhpStorm.
 * User: jerry.mei
 * Date: 2019/7/9
 * Time: 21:31
 */

namespace demo5;

interface IUserBo
{
    /**
     * 设置用户ID
     * @param int $userID
     */
    public function setUserID($userID);

    /**
     * 获取用户ID
     * @return int
     */
    public function getUserID();

    /**
     * 设置用户名
     * @param $userName
     */
    public function setUserName($userName);

    /**
     * 获取用户名
     * @return string
     */
    public function getUserName();
}