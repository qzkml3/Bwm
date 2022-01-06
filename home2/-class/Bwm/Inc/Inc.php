<?php

namespace Bwm\Inc;

class Inc {
	
	private static function getRes($res) {
		$file = $_SERVER['DOCUMENT_ROOT'] . $res;
		$v = filemtime($file);
		$res = $res . '?v=' . $v;

		return $res;
	}
	
	static function css($res) {
		return '<link href="' . self::getRes($res) . '" rel="stylesheet">';
	}

	static function js($res) {
		return '<script src="' . self::getRes($res) . '"></script>';
	}
}