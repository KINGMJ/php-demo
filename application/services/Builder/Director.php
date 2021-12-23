<?php


namespace Services\Builder;

class Director
{
	private $builder;

	public function __construct(Builder $builder) {
		$this->builder = $builder;
	}

	public function getAProduct(): Product {
		$this->builder->buildPartA();
		$this->builder->buildPartC();
		$this->builder->buildPartB();
		return $this->builder->getProduct();
	}
}
