<?php

namespace Services\Drive;

class Driver
{
	public function drive(Benz $benz){
		$benz->run();
	}
}
