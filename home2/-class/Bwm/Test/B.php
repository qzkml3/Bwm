<?php
namespace Bwm\Test;

/**
 * B is Test
 */
class B {
	/**
	 * @param $s
	 * motive document.writeTit();
	 */
	static function dwt($s) {
		echo "<br><br><hr>$s<br>";
	}
	
	/**
	 * @param $o
	 * motive document.write();
	 */
	static function dw($o) {
		echo "<pre>";
		print_r($o); 
		echo "<pre>";
	}
	
	static function isLocalhost() {
		$compare = $_SERVER["REMOTE_ADDR"];
		if ($compare == "127.0.0.1" || strstr($_SERVER["REMOTE_ADDR"], "192.168.")) {
			return true;
		}
	}
}



