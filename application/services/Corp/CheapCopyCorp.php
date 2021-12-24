<?php


namespace Services\Corp;


class CheapCopyCorp extends Corp
{
	public function makeMoney(): void {
		parent::makeMoney();
		printr("虽然是山寨的，但我很赚钱...");
	}
}
