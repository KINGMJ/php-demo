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

		print_r("<pre>");
		print_r($arr);
	}

	public function test2() {
		$arr = array(
			0 =>
				array(
					'project_stat' => 'DemandProgress' ,
					'unsupport_personal_version' => '1' ,
				) ,
			1 =>
				array(
					'project_stat' => 'TeamVelocity' ,
					'unsupport_personal_version' => '0' ,
				) ,
			2 =>
				array(
					'project_stat' => 'DefectDistribution' ,
					'unsupport_personal_version' => '1' ,
				)
		);
		echo $this->find_key_by_value($arr , 'TeamVelocity');
	}

	/**二维数组根据键值返回键名
	 * @param $arr
	 * @param $str
	 * @return bool|int|string
	 */
	private function find_key_by_value($arr , $str) {
		foreach ($arr as $k => $v) {
			if (in_array($str , $v))
				return $k;
		}
		return FALSE;
	}
}