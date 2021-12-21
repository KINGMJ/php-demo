<?php

namespace Services\CountGirl;

class Teacher
{
	public function command(GroupLeader $groupLeader) {
		$list_girls = [];
		for ($i = 0; $i < 20; $i++) {
			array_push($list_girls , new Girl());
		}
		$groupLeader->countGirls($list_girls);
	}
}
