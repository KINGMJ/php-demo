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

	/**
	 * 二维数组根据键值返回键名
	 */
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

	//测试for、foreach与array_walk的效率
	public function test_efficiency() {
		//生成1000个重复的字符数组
		$str = '这是上海呀\n ';
		$str = str_repeat($str , 20000);
		$arr = explode(' ' , $str);

		$this->test_for($arr);
		$this->test_foreach($arr);
		$this->test_array_walk($arr);
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

	private function test_for($arr) {
		//for耗时测试
		$t1 = microtime(TRUE);
		for ($i = 0; $i < count($arr); $i++) {
			$arr[ $i ] = $this->html($arr[ $i ]);
		}
		$t2 = microtime(TRUE);
		$t = $t2 - $t1;
		echo "使用for对数组操作花费: {$t}";
		echo "<br>";
	}

	private function test_foreach($arr) {
		$t1 = microtime(TRUE);
		foreach ($arr as &$v) {
			$v = $this->html($v);
		}
		$t2 = microtime(TRUE);
		$t = $t2 - $t1;
		echo "使用 foreach 调用函数对数组操作 : {$t}\n";
		echo "<br>";
	}

	private function html($item) {
		return stripslashes(str_replace("\\n" , "</br>" , $item));
	}

	private function test_array_walk($arr) {
		$t1 = microtime(TRUE);
		array_walk($arr , function (&$item) {
			$item = $this->html($item);
		});
		$t2 = microtime(TRUE);
		$t = $t2 - $t1;
		echo "使用 array_walk 花费 : {$t}\n";
	}
}