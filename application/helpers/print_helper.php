<?php

if ( ! function_exists('printr')) {

	function printr($data) {
		echo sprintf('<pre>%s</pre>' , print_r($data , TRUE));
	}
}
