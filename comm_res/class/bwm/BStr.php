<?php

class BStr
{
	static function replace($target, $from, $to) {
		return str_replace($from, $to, $target);
	}

	static function addStr($separ, $add, $now) {
		$rtn = $now . $separ . $add;
		return $rtn;
	}

	static function replaceStrFirst($from, $to, $content) {
		$from = '/' . preg_quote($from, '/') . '/';
		return preg_replace($from, $to, $content, 1);
	}
}