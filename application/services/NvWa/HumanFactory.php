<?php


namespace Services\NvWa;


interface HumanFactory
{
	public function createYellowHuman(): Human;

	public function createWhiteHuman(): Human;

	public function createBlackHuman(): Human;
}
