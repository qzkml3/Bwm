<?php

namespace Bwm\Inc;

class Inc
{

	static function getRes($res)
	{
		$file = $_SERVER['DOCUMENT_ROOT'] . $res;
		$v = filemtime($file);
		$res = $res . '?v=' . $v;

		return $res;
	}

	static function getResAbs($res)
	{
		return self::getRes($res);
	}

	static function getResRel($res)
	{
		$path = $_SERVER['SCRIPT_NAME'];
		$path = substr($path, 0, strrpos($path, '/') + 1);
		$res = $path . $res;

		return self::getRes($res);
	}
	
	static function test() {
		
	}
}
