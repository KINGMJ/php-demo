<?php


namespace Services\BuildCar;


class BMWBuilder extends CarBuilder
{

	private $bmwModel;

	public function __construct() {
		$this->bmwModel = new BMWModel();
	}

	public function setSequence(array $sequence): void {
		$this->bmwModel->setSequence($sequence);
	}

	public function getCarModel(): CarModel {
		return $this->bmwModel;
	}
}
