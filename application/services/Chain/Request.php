<?php


namespace Services\Chain;


class Request
{
	private $requestLevel;

	public function __construct(int $requestLevel) {
		$this->requestLevel = $requestLevel;
	}

	public function getRequestLevel(): int {
		return $this->requestLevel;
	}
}
