<?php


namespace Services\UserObjectAdapter;


class OuterUserHomeInfo implements IOuterUserHomeInfo
{

	public function getUserHomeInfo(): object {
		$obj = new \stdClass();
		$obj->homeAddress = "这个员工的家庭住址是...";
		return $obj;
	}
}
