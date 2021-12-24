<?php


namespace Services\UserObjectAdapter;


class OuterUserOfficeInfo implements IOuterUserOfficeInfo
{

	public function getUserOfficeInfo(): object {
		$obj = new \stdClass();
		$obj->jobPosition = "这个员工的职位是Boss...";
		return $obj;
	}
}
