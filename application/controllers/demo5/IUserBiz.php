<?php
/**
 * Created by PhpStorm.
 * User: jerry.mei
 * Date: 2019/7/9
 * Time: 21:31
 */

namespace demo5;


interface IUserBiz
{
    /**
     * 查询用户
     * @param int $id
     */
    public function findById(int $id);

    /**
     * 新增用户
     * @param IUserBo $userBo
     */
    public function addUser(IUserBo $userBo);

    /**
     * 删除用户
     * @param IUserBo $userBo
     */
    public function deleteUser(IUserBo $userBo);

    /**
     * 更新用户信息
     * @param IUserBo $userBo
     */
    public function updateUser(IUserBo $userBo);
}