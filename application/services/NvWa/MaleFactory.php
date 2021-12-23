<?php


namespace Services\NvWa;


class MaleFactory implements HumanFactory
{

	public function createYellowHuman(): Human {
		return new MaleYellowHuman();
	}

	public function createWhiteHuman(): Human {
		return new MaleWhiteHuman();
	}

	public function createBlackHuman(): Human {
		return new MaleBlackHuman();
	}
}
