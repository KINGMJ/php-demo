<?php


namespace Services\UserClassAdapter;

/**
 * 适配器了，将外部接口转换为系统的接口
 * Class Adapter
 * @package Services\UserClassAdapter
 */
class Adapter extends OuterUser implements IUserInfo
{

	public function getUserName(): string {
		return $this->getUserBaseInfo()->userName;
	}

	public function getHomeAddress(): string {
		return $this->getUserHomeInfo()->homeAddress;
	}

	public function getMobileNumber(): string {
		return $this->getUserBaseInfo()->mobileNumber;
	}

	public function getJobPosition(): string {
		return $this->getUserOfficeInfo()->jobPosition;
	}
}
