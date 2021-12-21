<?php


namespace Services\CountGirl;


class GroupLeader
{
	public function countGirls(array $list_girls) {
		printr("女生的数量是" . count($list_girls));
	}
}
