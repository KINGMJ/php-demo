<?php


namespace Services\Command;


class ConcreteReceiver1 implements Receiver
{

	public function action(): void {
		printr("接收者1要完成的任务");
	}
}
