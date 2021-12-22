<?php


namespace Services\SimpleFactory;


class ConcreteProductA
{

	/**
	 * ConcreteProductA constructor.
	 */
	public function __construct() {
	}

	public function show() {
		printr("I'm product A");
	}
}
