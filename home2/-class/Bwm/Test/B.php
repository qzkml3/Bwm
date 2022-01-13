<?php
namespace Bwm\Test;

/**
 * B is Test
 */
class B {
	/**
	 * motive document.writeTit();
	 * @param $s
	 */
	static function dwt($s) {
		echo "<br><br><hr> $s";
	}
	
	/**
	 * motive document.write();
	 * @param $s
	 */
	static function dw($s) {
		echo "<br> $s";
	}
	
	static function showObj($array) {
		echo "<pre>";
		echo print_r($array);
		echo "</pre>";
	}
}



