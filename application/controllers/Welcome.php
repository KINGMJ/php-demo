<?php

use Services\SafeComposite\Composite;
use Services\SafeComposite\Leaf;

defined('BASEPATH') or exit('No direct script access allowed');


require_once APPPATH . 'services/Autoloader.php';

class Welcome extends CI_Controller
{
	public function __construct() {
		parent::__construct();

	}

	public function index() {
		//创建一个根节点
		$root = new Composite();
		//创建一个树枝节点
		$branch = new Composite();

		//创建一个叶子节点
		$leaf = new Leaf();

		//建立整体关系
		$root->add($branch);
		$branch->add($leaf);

		printr($root);
		$this->display($root);
	}

	/**
	 * 递归显示节点
	 * @param Composite $root
	 */
	private function display(Composite $root) {
		foreach ($root->getChildren() as $child) {
			$child->doSomething();
			//叶子节点
			if ($child instanceof Composite) {
				$this->display($child);
			}
		}
	}
}
