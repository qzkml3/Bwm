<?php

namespace Bwm\Inc;

use Bwm\Str\Str;

class Inc
{

	static function getRes($res)
	{
		if (Str::startsWith($res, '/')) {
			return self::getResAbs($res);
		} else {
			return self::getResRel($res);
		}
	}

	private static function getResAbs($res)
	{
		$file = $_SERVER['DOCUMENT_ROOT'] . $res;
		$v = filemtime($file);
		$res = $res . '?v=' . $v;

		return $res;
	}

	private static function getResRel($res)
	{
		$path = $_SERVER['SCRIPT_NAME'];
		$path = substr($path, 0, strrpos($path, '/') + 1);
		$res = $path . $res;
		
		return self::getResAbs($res);
	}
	
	static function test() {
		
	}
}
