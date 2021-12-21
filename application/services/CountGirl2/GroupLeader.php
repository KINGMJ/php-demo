<?php


namespace Services\CountGirl2;


class GroupLeader
{
	private $list_girls;

	public function __construct($list_girls) {
		$this->list_girls = $list_girls;
	}

	public function countGirls() {
		printr("女生的数量是" . count($this->list_girls));
	}
}
