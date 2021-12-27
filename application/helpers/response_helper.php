<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 拼装输出成功信息
 */
if ( ! function_exists('response_success')) {
	function response_success($msg = ""): object {
		$obj = new stdClass();
		$obj->succeed = TRUE;
		$obj->message = $msg;
		return $obj;
	}
}

/**
 *  拼装输出错误信息
 */
if ( ! function_exists('response_error')) {
	function response_error($msg): object {
		$obj = new stdClass();
		$obj->succeed = TRUE;
		$obj->message = $msg;
		return $obj;
	}
}
