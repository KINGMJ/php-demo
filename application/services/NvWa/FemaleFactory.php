<?php


namespace Services\NvWa;


class FemaleFactory implements HumanFactory
{

	public function createYellowHuman(): Human {
		return new FemaleYellowHuman();
	}

	public function createWhiteHuman(): Human {
		return new FemaleWhiteHuman();
	}

	public function createBlackHuman(): Human {
		return new FemaleBlackHuman();
	}
}
