<?php


namespace Services\Corp;


/**
 * Class HouseCorp
 * @package Services\Corp
 */
class HouseCorp extends Corp
{
	public function makeMoney(): void {
		parent::makeMoney();
		printr("房地产公司赚大钱了...");
	}
}
