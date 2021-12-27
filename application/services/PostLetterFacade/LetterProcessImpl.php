<?php


namespace Services\PostLetterFacade;

/**
 * 写信的具体实现
 * Class LetterProcessImpl
 * @package Services\PostLetterFacade
 */
class LetterProcessImpl implements ILetterProcess
{

	public function writeContext(string $context): void {
		printr("填写信的内容：" . $context);
	}

	public function fillEnvelope(string $address): void {
		printr("填写收件人地址及姓名：" . $address);
	}

	public function letterIntoEnvelope(): void {
		printr("把信放到信封中...");
	}

	public function sendLetter(): void {
		printr("邮递信件...");
	}
}
