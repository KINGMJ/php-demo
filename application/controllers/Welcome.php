<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index() {
		phpinfo();
		exit;
		$this->load->view('welcome_message');
	}

	public function db_test() {
		$this->load->model('test_m');
		$user = $this->test_m->test1();
		print_r($user);
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
