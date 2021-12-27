<?php


namespace Services\ResourceChain;


class DeptHandler extends Handler
{

	protected function getHandlerLevel(): int {
		return Level::$DEPT_LEVEL;
	}

	/**
	 * @inheritDoc
	 */
	public function handleMessage(Request $request): object {
		// 传入的要检查的资源级别不是当前级别，则甩给上一级检查
		if ($this->getHandlerLevel() != $request->getRequestLevel() &&
			$this->nextHandler !== NULL) {
			return $this->nextHandler->handleMessage($request);
		}
		//检查部门是否存在
		$response = $this->getDept($request);
		if ( ! $response->succeed) {
			return $response; // 资源不存在，则结束
		}
		$ent_id = $response->message['ent_id'];
		// 当前等级的资源检查通过后，接着检查上一级的资源是否存在
		if ($this->nextHandler != NULL && $ent_id > 0) {
			//level+1
			$request->setRequestLevel($request->getRequestLevel() + 1);
			$response = $this->nextHandler->handleMessage($request);
		}
		return $response;
	}

	private function getDept(Request $request): object {
		if ($request->getDeptExists()) {
			return response_success(array(
				'dept_id' => 1 ,
				"ent_id" => 1 ,
			));
		} else {
			return response_error("部门不存在");
		}
	}


}
