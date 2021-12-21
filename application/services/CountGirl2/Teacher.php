<?php

namespace Services\CountGirl2;

class Teacher
{
	public function command(GroupLeader $groupLeader) {
		$groupLeader->countGirls();
	}
}
