<?php

namespace bwm\conf;

class SiteConf {
	const SITE_NAME = 'Test';
	
	const SITE_ID = 'test';
	const SITE_ROOT_URL = '/test';

	const VIEW_URL = '/view';
	const LAYOUT_URL = '/-layout';

	function getRootDir() {
		return $_SERVER['DOCUMENT_ROOT'];
	}
	
	function getSiteRootDir() {
		return self::getRootDir() . self::SITE_ROOT_URL;
	}

	function getViewDir() {
		return self::getSiteRootDir() . self::VIEW_URL;

	}

	function getLayoutDir() {
		return self::getViewDir() . self::LAYOUT_URL;
	}

	function getSiteUrl() {
		return self::SITE_ROOT_URL;
	}
}