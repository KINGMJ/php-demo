<?php


namespace Services\UserObjectAdapter;


class OuterUserBaseInfo implements IOuterUserBaseInfo
{

	public function getUserBaseInfo(): object {
		$obj = new \stdClass();
		$obj->userName = "这个员工叫jack...";
		$obj->mobileNumber = "这个员工的电话是...";
		return $obj;
	}
}
