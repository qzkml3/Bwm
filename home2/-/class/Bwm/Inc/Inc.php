<?php

namespace Bwm\Inc;

class Inc {


	static function css($res) {
		return '<link href="' . self::getRes($res) . '" rel="stylesheet">';	
	}
	
	private static function getRes($res) {
		$file = $_SERVER['DOCUMENT_ROOT'] . $res;
		$v = filemtime($file);
		$res = $res . '?v=' . $v;

		return $res;
	}
}