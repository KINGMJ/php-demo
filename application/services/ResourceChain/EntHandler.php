<?php


namespace Services\ResourceChain;


class EntHandler extends Handler
{

	protected function getHandlerLevel(): int {
		return Level::$ENT_LEVEL;
	}

	/**
	 * @inheritDoc
	 */
	public function handleMessage(Request $request): object {
		// 传入的要检查的资源级别不是当前级别，则甩给上一级检查
		if ($this->getHandlerLevel() != $request->getRequestLevel()) {
			return response_error("传入错误的Level");
		}
		//检查企业是否存在
		return $this->getEnt($request);
	}

	private function getEnt(Request $request): object {
		if ($request->getEntExists()) {
			return response_success(array(
				"ent_id" => 1 ,
			));
		} else {
			return response_error("企业不存在");
		}
	}


}
