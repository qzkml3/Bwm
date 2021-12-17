<?php
namespace Bwm\Str;

class Str
{
	static function getPreStr($all, $srch) {
		$v = substr($all, 0, strpos($all, $srch));
		return $v;
	}
	static function getPreStrRev($all, $srch) {
		$v = substr($all, 0, strrpos($all, $srch));
		return $v;
	}
	static function getPostStr($all, $srch) {
		$v = substr($all, strpos($all, $srch) + 1);
		return $v;
	}
	static function getPostStrRev($all, $srch) {
		$v = substr($all, strrpos($all, $srch) + 1);
		return $v;
	}
	static function hasStr($all, $srch) {
		return strrpos($all, $srch);
	}
}