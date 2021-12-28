<?php


namespace Services\LiftState;

/**
 * 环境类（Context）角色：也称为上下文，它定义了客户端需要的接口，内部维护一个当前状态，并负责具体状态的切换。
 * Class Context
 * @package Services\LiftState
 */
class Context
{
	//关闭状态
	public static $CLOSING_STATE;
	//开启状态
	public static $OPENING_STATE;
	//运行状态
	public static $RUNNING_STATE;
	//停止状态
	public static $STOPPING_STATE;

	//定义一个当前电梯状态
	private $liftState;

	public function __construct() {
		self::$CLOSING_STATE = new ClosingState();
		self::$OPENING_STATE = new OpeningState();
		self::$RUNNING_STATE = new RunningState();
		self::$STOPPING_STATE = new StoppingState();
	}

	/**
	 * @return mixed
	 */
	public function getLiftState() {
		return $this->liftState;
	}

	/**
	 * @param mixed $liftState
	 */
	public function setLiftState(LiftState $liftState): void {
		$this->liftState = $liftState;
		//把当前的环境通知到各个实现类中
		$this->liftState->setContext($this);
	}

	public function open() {
		$this->liftState->open();
	}

	public function close() {
		$this->liftState->close();
	}

	public function run() {
		$this->liftState->run();
	}

	public function stop() {
		$this->liftState->stop();
	}

}
