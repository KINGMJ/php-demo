<?php


namespace Services\ResourceChain;


class ProjectHandler extends Handler
{

	protected function getHandlerLevel(): int {
		return Level::$PROJECT_LEVEL;
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
		//检查项目是否存在
		$response = $this->getProject($request);
		if ( ! $response->succeed) {
			return $response; // 资源不存在，则结束
		}
		$dept_id = $response->message['dept_id'];
		// 当前等级的资源检查通过后，接着检查上一级的资源是否存在
		if ($this->nextHandler != NULL && $dept_id > 0) {
			//level+1
			$request->setRequestLevel($request->getRequestLevel() + 1);
			$response = $this->nextHandler->handleMessage($request);
		}
		return $response;
	}

	private function getProject(Request $request): object {
		if ($request->getProjectExists()) {
			return response_success(array(
				'project_id' => 1 ,
				"dept_id" => 1 ,
			));
		} else {
			return response_error("项目不存在");
		}
	}


}
