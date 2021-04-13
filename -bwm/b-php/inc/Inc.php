<?php

namespace Bwm\Inc;

class Inc {
	function getRes($res)
	{
		$file =  $_SERVER['DOCUMENT_ROOT'] . $res;
		$v = filemtime($file);
		
		return $res . '?v=' . $v;
	}

	function getCss($res)
	{
		return '<link href="' . $this->getRes($res) . '" rel="stylesheet" />';
	}

	function getJs($res)
	{
		return '<script src="' . $this->getRes($res) . '"></script>';
	}
}
