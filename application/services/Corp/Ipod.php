<?php


namespace Services\Corp;


class Ipod implements Product
{

	public function beProduced(): void {
		printr("山寨的Ipod是这样的...");
	}

	public function beSold(): void {
		printr("山寨的Ipod卖出去了...");
	}
}
