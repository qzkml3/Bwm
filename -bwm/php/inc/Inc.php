<?php

namespace Bwm\Inc;

class Inc
{

	function getRes($res)
	{
		$file = $_SERVER['DOCUMENT_ROOT'] . $res;
		$v = filemtime($file);
		$res = $res . '?v=' . $v;

		return $res;
	}

	function getResAbs($res)
	{
		return $this->getRes($res);
	}

	function getResRel($res)
	{
		$path = $_SERVER['SCRIPT_NAME'];
		$path = substr($path, 0, strrpos($path, '/') + 1);
		$res = $path . $res;

		return $this->getRes($res);
	}
}
