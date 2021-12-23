<?php

namespace Services\Builder;


class ConcreteBuilder extends Builder
{

	public function buildPartA() {
		$this->product->setPartA("建造PartA...");
	}

	public function buildPartB() {
		$this->product->setPartB("建造PartB...");
	}

	public function buildPartC() {
		$this->product->setPartC("建造PartC...");
	}
}
