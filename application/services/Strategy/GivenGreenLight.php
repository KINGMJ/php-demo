<?php


namespace Services\Strategy;


class GivenGreenLight implements IStrategy
{

	public function operate(): void {
		printr("求吴国太开绿灯,放行！");
	}
}
