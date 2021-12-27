<?php

namespace Services\PostLetterFacade;

interface ILetterProcess
{
	//首先要写信的内容
	public function writeContext(string $context): void;

	//其次写信封
	public function fillEnvelope(string $address): void;

	//把信放到信封里
	public function letterIntoEnvelope(): void;

	//然后邮递
	public function sendLetter(): void;
}
