<?php
namespace Bwm\Str;

class Str
{
	static function getPreStr($all, $part) {
		$v = substr($all, 0, strpos($all, $part));
		return $v;
	}
	static function getPreStrRev($all, $part) {
		$v = substr($all, 0, strrpos($all, $part));
		return $v;
	}
	static function getPostStr($all, $part) {
		$v = substr($all, strpos($all, $part) + 1);
		return $v;
	}
	static function getPostStrRev($all, $part) {
		$v = substr($all, strrpos($all, $part) + 1);
		return $v;
	}
}