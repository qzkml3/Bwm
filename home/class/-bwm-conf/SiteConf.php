<?php

namespace bwm\conf;

class SiteConf {
	const SITE_ID = 'home';
	const SITE_NAME = 'bourder\'s home';

	const BWM_ROOT_URL = '/-bwm';
	const VIEW_URL = '/view';
	const LAYOUT_URL = '/-layout';

	function getSiteId() {
		return self::SITE_ID;
	}
	
	function getBwmRootUrl() {
		return self::BWM_ROOT_URL;
	}
	
	function getSiteRootDir() {
		$v = $_SERVER['DOCUMENT_ROOT'] . '/' . self::SITE_ID;
		return $v;
	}

	function getSiteRootUrl() {
		return '/' . self::SITE_ID;
	}

	function getViewDir() {
		return self::getSiteRootDir() . self::VIEW_URL;

	}

	function getLayoutDir() {
		return self::getViewDir() . self::LAYOUT_URL;
	}
}