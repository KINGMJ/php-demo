<?php


namespace Services\BuildCar;


class BenzBuilder extends CarBuilder
{

	private $benzModel;

	public function __construct() {
		$this->benzModel = new BenzModel();
	}

	public function setSequence(array $sequence): void {
		$this->benzModel->setSequence($sequence);
	}

	public function getCarModel(): CarModel {
		return $this->benzModel;
	}
}
