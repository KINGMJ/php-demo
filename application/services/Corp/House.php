<?php


namespace Services\Corp;


class House implements Product
{

	public function beProduced(): void {
		printr("生产出的房子是这样的...");
	}

	public function beSold(): void {
		printr("生产出的房子卖出去了...");
	}
}
