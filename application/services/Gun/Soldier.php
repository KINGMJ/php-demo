<?php

namespace Services\Gun;

class Soldier
{
	private $gun;

	public function setGun(AbstractGun $gun) {
		$this->gun = $gun;
	}

	public function killEnemy() {
		printr("士兵开始击杀敌人...");
		$this->gun->shoot();
	}
}
