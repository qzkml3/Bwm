<?php

namespace Bwm\Conf;

class SiteConf {
	const SITE_ID = 'home';
	const SITE_NAME = "Bourder's Home";

	const BWM_ROOT_URL = '/-bwm';
	const VIEW_URL = '/sub';
	const LAYOUT_URL = '/inc/comm';

	function getSiteId() {
		return self::SITE_ID;
	}

	function getSiteName() {
		return self::SITE_NAME;
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
		return self::getSiteRootDir() . self::LAYOUT_URL;
	}
}