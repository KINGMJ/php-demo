<?php


namespace Services\UserClassAdapter;


class OuterUser implements IOuterUser
{
	public function getUserBaseInfo(): object {
		$obj = new \stdClass();
		$obj->userName = "这个员工叫jack...";
		$obj->mobileNumber = "这个员工的电话是...";
		return $obj;
	}

	public function getUserOfficeInfo(): object {
		$obj = new \stdClass();
		$obj->jobPosition = "这个员工的职位是Boss...";
		return $obj;
	}

	public function getUserHomeInfo(): object {
		$obj = new \stdClass();
		$obj->homeAddress = "这个员工的家庭住址是...";
		return $obj;
	}
}
