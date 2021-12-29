<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

/**
 * 模拟事件通知器中间件
 */
$hook['event_notifier_bus'][] = array(
	'class' => 'Event_notifier_bus' ,
	'function' => 'handle' ,
	'filename' => 'Event_notifier_bus.php' ,
	'filepath' => 'hooks'
);
