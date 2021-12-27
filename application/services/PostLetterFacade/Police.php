<?php


namespace Services\PostLetterFacade;

/**
 * Class Police
 * @package Services\PostLetterFacade
 */
class Police
{
	public function checkLetter(ILetterProcess $letterProcess) {
		printr(get_class($letterProcess) . "信件已经检查过了");
	}
}
