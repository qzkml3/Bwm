<?php

class StrUtil
{
	static function addStr($separ, $add, $now) {
		$rtn = $now . $separ . $add;
		return $rtn;
	}

	static function replaceStrFirst($from, $to, $content) {
		$from = '/' . preg_quote($from, '/') . '/';
		return preg_replace($from, $to, $content, 1);
	}
}