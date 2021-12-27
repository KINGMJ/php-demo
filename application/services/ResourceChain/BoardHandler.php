<?php


namespace Services\ResourceChain;


class BoardHandler extends Handler
{

	protected function getHandlerLevel(): int {
		return Level::$BOARD_LEVEL;
	}

	public function handleMessage(Request $request): object {
		// 传入的要检查的资源级别不是当前级别，则甩给上一级检查
		if ($this->getHandlerLevel() != $request->getRequestLevel() &&
			$this->nextHandler !== NULL) {
			return $this->nextHandler->handleMessage($request);
		}
		//检查看板是否存在
		$response = $this->getBoard($request);
		if ( ! $response->succeed) {
			return $response; // 资源不存在，则结束
		}
		$project_id = $response->message['project_id'];
		// 当前等级的资源检查通过后，接着检查上一级的资源是否存在
		if ($this->nextHandler != NULL && $project_id > 0) {
			//level+1
			$request->setRequestLevel($request->getRequestLevel() + 1);
			$response = $this->nextHandler->handleMessage($request);
		}
		return $response;
	}

	private function getBoard(Request $request): object {
		if ($request->getBoardExists()) {
			return response_success(array(
				'board_id' => 1 ,
				"project_id" => 1 ,
			));
		} else {
			return response_error("看板不存在");
		}
	}
}
