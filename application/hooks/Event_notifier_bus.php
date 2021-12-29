<?php

/**
 * 事件监听总线，调用示例：
 * @example
 *          $this->hooks->_call_hook('event_notifier_bus' , array('TaskMove' , $params=[]));
 *          参数格式：array($param1,$param2)
 *                  $param1：event目录下具体的Event类
 *                  $param2：该event需要传递的参数，格式为数组
 * Class Event_notifier_bus
 */
class Event_notifier_bus
{
	//event和对应的listener类配置
	private $notifierMiddleware = array(
		//卡片对应事件
		'TaskCopy' => [
			'Event' => '\Events\Task\Copy' ,
			'Listeners' => [
				'\Listeners\Listener1' ,
				'\Listeners\Listener2'
			]
		]
	);

	public function handle($params) {
		//如果参数格式不正确，直接结束
		if ( ! is_array($params)) {
			return;
		}
		//notifier类必须传入
		if (empty($params[0])) {
			return;
		}

		//传入的对应动作类，没有命名空间
		$class = $params[0];

		if ( ! isset($this->notifierMiddleware[ $class ])) {
			return;
		}

		$eventClass = $this->notifierMiddleware[ $class ]['Event'];
		$listenersClass = $this->notifierMiddleware[ $class ]['Listeners'];

		//使用autoloader自动注入
		$filepath = APPPATH . 'events/Autoloader.php';

		if ( ! class_exists($eventClass)) {
			require_once($filepath);
		}
		//event对应的listener类
		$params = $params[1] ?? [];
		(new $eventClass($listenersClass))->notify($params);
	}
}
