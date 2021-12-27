<?php

namespace Services\PostLetterFacade;

/**
 * Facade类
 * Class ModernPostOffice
 * @package Services\PostLetterFacade
 */
class ModernPostOffice
{
	private $letterProcess;
	private $police;

	public function __construct() {
		$this->letterProcess = new LetterProcessImpl();
		$this->police = new Police();
	}

	public function sendLetter(string $context , string $address) {
		//开始写信
		$this->letterProcess->writeContext($context);
		//开始写信封
		$this->letterProcess->fillEnvelope($address);
		//检查信件
		$this->police->checkLetter($this->letterProcess);
		//把信放到信封里， 并封装好
		$this->letterProcess->letterIntoEnvelope();
		//跑到邮局把信塞到邮箱， 投递
		$this->letterProcess->sendLetter();
	}
}
