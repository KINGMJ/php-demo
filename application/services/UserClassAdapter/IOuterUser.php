<?php

namespace Services\UserClassAdapter;

/**
 * 源角色，外部系统的用户接口，需要对该接口进行转换
 * Interface IOuterUser
 * @package Services\UserClassAdapter
 */
interface IOuterUser
{
	//获取用户基本信息
	public function getUserBaseInfo(): object;

	//获取用户职位信息
	public function getUserOfficeInfo(): object;

	//获取用户家庭信息
	public function getUserHomeInfo(): object;

}
