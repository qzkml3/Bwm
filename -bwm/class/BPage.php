<?php

class BPage
{
	static function getTitleByFileName() {
		$v = $_SERVER['PHP_SELF'];
		$v = substr($v, strrpos($v, '/') + 1);
		$v = substr($v, 0, strrpos($v, '.'));
		return $v;
	}
}