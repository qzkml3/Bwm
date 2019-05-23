<?php
define('B_SITE_NAME', 'Boulder\'s homepage');
define('B_TITLE_DELIMITER', ' : ');

class BSite
{
	static function getPageTitle()
	{
		if (B_TITLE) {
			return B_TITLE . B_TITLE_DELIMITER . B_SITE_NAME;
		} else {
			return B_SITE_NAME;
		}
	}

	static function getGaCode() {
		require_once $_SERVER['DOCUMENT_ROOT'] . '/home/comm/inc/code-ga.html';
	}

	static function getNaCode() {
		require_once $_SERVER['DOCUMENT_ROOT'] . '/home/comm/inc/code-na.html';
	}
}