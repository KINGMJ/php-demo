<?php


class Array_demo extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}

	/**
	 * 对数组中每一项做处理
	 */
	public function array_walk_test() {
		$arr = [
			["name" => "jack" , "age" => 18] ,
			["name" => "rose" , "age" => 21] ,
			["name" => "mike" , "age" => 18]
		];

		array_walk($arr , function (&$item) {
			$item['age'] = '10';
		});

		print_r($arr);
	}
}