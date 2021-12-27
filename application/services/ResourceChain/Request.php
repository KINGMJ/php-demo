<?php


namespace Services\ResourceChain;


class Request
{
	private $requestLevel;

	//模拟资源是否存在
	private $boardExists;
	private $projectExists;
	private $deptExists;
	private $entExists;

	public function __construct(int $requestLevel) {
		$this->requestLevel = $requestLevel;
	}

	public function getRequestLevel(): int {
		return $this->requestLevel;
	}

	/**
	 * @return mixed
	 */
	public function getBoardExists() {
		return $this->boardExists;
	}

	/**
	 * @param mixed $boardExists
	 */
	public function setBoardExists($boardExists): void {
		$this->boardExists = $boardExists;
	}

	/**
	 * @return mixed
	 */
	public function getProjectExists() {
		return $this->projectExists;
	}

	/**
	 * @param mixed $projectExists
	 */
	public function setProjectExists($projectExists): void {
		$this->projectExists = $projectExists;
	}

	/**
	 * @return mixed
	 */
	public function getDeptExists() {
		return $this->deptExists;
	}

	/**
	 * @param mixed $deptExists
	 */
	public function setDeptExists($deptExists): void {
		$this->deptExists = $deptExists;
	}

	/**
	 * @return mixed
	 */
	public function getEntExists() {
		return $this->entExists;
	}

	/**
	 * @param mixed $entExists
	 */
	public function setEntExists($entExists): void {
		$this->entExists = $entExists;
	}

	/**
	 * @param int $requestLevel
	 */
	public function setRequestLevel(int $requestLevel): void {
		$this->requestLevel = $requestLevel;
	}

}
