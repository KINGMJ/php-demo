<?php

namespace Services\Drive2;

class Driver implements IDriver
{
	public function drive(ICar $car){
		$car->run();
	}
}
