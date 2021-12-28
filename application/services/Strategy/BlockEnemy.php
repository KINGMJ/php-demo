<?php


namespace Services\Strategy;


class BlockEnemy implements IStrategy
{

	public function operate(): void {
		printr("孙夫人断后， 挡住追兵");
	}
}
