<?php

namespace Services\UserClassAdapter;
/**
 * 用户信息类
 * Class UserInfo
 */
class UserInfo implements IUserInfo
{
	public function getUserName(): string {
		return "用户的名字是...";
	}

	public function getHomeAddress(): string {
		return "用户的家庭地址是...";
	}

	public function getMobileNumber(): string {
		return "用户的手机号是...";
	}

	public function getJobPosition(): string {
		return "用户的职位是...";
	}
}
