<?php

namespace Services\Drive3;

class Driver implements IDriver
{
	private $car;

	public function __construct(ICar $car) {
		$this->car = $car;
	}

	public function drive() {
		$this->car->run();
	}
}
