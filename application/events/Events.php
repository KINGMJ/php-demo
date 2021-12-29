<?php

namespace Events;

require_once APPPATH . 'services/Autoloader.php';
require_once APPPATH . 'listeners/Autoloader.php';


abstract class Events
{
	protected $observers;

	function __construct($observers) {
		$this->observers = $observers;
	}

	//事件监听
	public abstract function notify($params);
}
