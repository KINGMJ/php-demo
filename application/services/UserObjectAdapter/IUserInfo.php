<?php

namespace Services\UserObjectAdapter;
/**
 * 目标角色，该系统的用户模型
 * Class IUserInfo
 */
interface IUserInfo
{
	//获取用户名
	public function getUserName(): string;

	//获取用户家庭住址
	public function getHomeAddress(): string;

	//获取用户手机
	public function getMobileNumber(): string;

	//获取用户职位
	public function getJobPosition(): string;

}
