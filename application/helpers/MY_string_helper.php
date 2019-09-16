<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 扩展 CI 的 string_helper
 */
if ( ! function_exists('camelize')) {
	/**
	 * 下划线转小驼峰
	 * 思路:
	 * step1.原字符串转小写,原字符串中的分隔符用空格替换,在字符串开头加上分隔符
	 * step2.将字符串中每个单词的首字母转换为大写,再去空格,去字符串首部附加的分隔符.
	 * @param        $uncamelized_words
	 * @param string $separator
	 * @return string
	 * @example defect_distribution => defectDistribution
	 */
	function camelize($uncamelized_words , $separator = '_') {
		$uncamelized_words = $separator . str_replace($separator , " " , strtolower($uncamelized_words));
		return ltrim(str_replace(" " , "" , ucwords($uncamelized_words)) , $separator);
	}
}

if ( ! function_exists('upper_camelize')) {
	/**
	 * 下划线转大驼峰
	 * 思路:
	 * step1.转小驼峰
	 * step2.首字母转大写
	 * @param        $uncamelized_words
	 * @param string $separator
	 * @return string
	 * @example defect_distribution => DefectDistribution
	 */
	function upper_camelize($uncamelized_words , $separator = '_') {
		return ucwords(camelize($uncamelized_words , $separator));
	}
}

if ( ! function_exists('uncamelize')) {
	/**
	 * 驼峰命名转下划线命名
	 * 思路:
	 * 小写和大写紧挨一起的地方,加上分隔符,然后全部转小写
	 * @param        $camelCaps
	 * @param string $separator
	 * @return string
	 */
	function uncamelize($camelCaps , $separator = '_') {
		return strtolower(preg_replace('/([a-z])([A-Z])/' , "$1" . $separator . "$2" , $camelCaps));
	}
}

if ( ! function_exists('class_basename')) {
	/**
	 * Laravel 里面的获取当前类的名称，不带命名空间
	 * @param $class string 类名
	 * @return string
	 */
	function class_basename($class) {
		return basename(str_replace('\\' , '/' , $class));
	}
}

if ( ! function_exists('uuid')) {
	/**
	 * 生成id
	 * @return bool|string
	 */
	function uuid() {
		return substr(md5(uniqid(mt_rand() , TRUE)) , 8 , 16);
	}
}