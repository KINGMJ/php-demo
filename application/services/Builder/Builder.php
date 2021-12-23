<?php

namespace Services\Builder;

abstract class Builder
{
	protected $product;

	public function __construct() {
		$this->product = new Product();
	}

	public abstract function buildPartA();

	public abstract function buildPartB();

	public abstract function buildPartC();

	public function getProduct(): Product {
		return $this->product;
	}
}
