<?php

namespace Services\Builder;

class Product
{
	private $partA;
	private $partB;
	private $partC;

	/**
	 * @param mixed $partA
	 */
	public function setPartA($partA): void {
		$this->partA = $partA;
	}

	/**
	 * @param mixed $partB
	 */
	public function setPartB($partB): void {
		$this->partB = $partB;
	}

	/**
	 * @param mixed $partC
	 */
	public function setPartC($partC): void {
		$this->partC = $partC;
	}

	public function show(): void {
		printr($this->partA);
		printr($this->partB);
		printr($this->partC);
	}
}
