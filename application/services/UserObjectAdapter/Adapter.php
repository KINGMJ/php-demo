<?php


namespace Services\UserObjectAdapter;


class Adapter implements IUserInfo
{

	//源目标对象
	private $userBaseInfo;
	private $userHomeInfo;
	private $userOfficeInfo;

	public function __construct(IOuterUserBaseInfo $baseInfo ,
	                            IOuterUserHomeInfo $homeInfo ,
	                            IOuterUserOfficeInfo $officeInfo) {
		$this->userBaseInfo = $baseInfo;
		$this->userHomeInfo = $homeInfo;
		$this->userOfficeInfo = $officeInfo;
	}


	public function getUserName(): string {
		return $this->userBaseInfo->getUserBaseInfo()->userName;
	}

	public function getHomeAddress(): string {
		return $this->userHomeInfo->getUserHomeInfo()->homeAddress;
	}

	public function getMobileNumber(): string {
		return $this->userBaseInfo->getUserBaseInfo()->mobileNumber;
	}

	public function getJobPosition(): string {
		return $this->userOfficeInfo->getUserOfficeInfo()->jobPosition;
	}
}
