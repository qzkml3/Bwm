<?php
namespace Bwm\Url;

use Bwm\Str\Str;

class Url {
	static function getFileName() {
		$v = $_SERVER['REQUEST_URI'];
		$v = Str::getPostStrRev($v, '/');
		$v = Str::getPreStr($v, '.');
		return $v;
	}
}