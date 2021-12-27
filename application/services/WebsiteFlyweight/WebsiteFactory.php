<?php


namespace Services\WebsiteFlyweight;


class WebsiteFactory
{
	private $flyweights = [];

	/**
	 * 获取享元角色，也就是网站分类
	 * @param string $key
	 * @return mixed|ConCreteWebsite
	 */
	public function getFlyWeight(string $key) {
		if ( ! array_key_exists($key , $this->flyweights)) {
			$this->flyweights[ $key ] = new ConCreteWebsite($key);
		} else {
			printr("具体享元" . $key . "已经存在, 被成功获取！");
		}
		return $this->flyweights[ $key ];
	}

	/**
	 * 获取享元角色的数量
	 * @return int
	 */
	public function getFlyWeightsCount(): int {
		return count($this->flyweights);
	}
}
