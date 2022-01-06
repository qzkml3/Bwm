<?php
namespace Bwm\D;

/**
 * D is short form of Dev or Debug
 */
class D {
	static function echo($s) {
		echo "$s <br>";
		return $s;
	}
	static function echoTit($s) {
		echo "<br><hr> $s <br>";
		return $s;
	}
}