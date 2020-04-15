<?php

class SiteConf {
	# Site
	const SITE_NAME = 'Test';
	const SITE_ID = 'test';
	
	# Site dir
	const VIEW_DIR = '/view';
	const LAYOUT_DIR = '/-layout';
	const INC_DIR = '/-inc';
	const POP_DIR = '/-pop';
	
	# Site URL
	const ROOT_URL = '/';
	const SITE_ROOT_URL = '/' . self::SITE_ID;
	const VIEW_URL = self::SITE_ROOT_URL . '/view';
	const LAYOUT_URL = self::VIEW_URL . '/-layout';
	const INC_URL = self::VIEW_URL . '/-inc';
	const POP_URL = self::VIEW_URL . '/-pop';
	
	# Site resource URL
	const css_URL = self::SITE_ROOT_URL . '/css';
	const JS_URL = self::SITE_ROOT_URL . '/js';
	const IMG_URL = self::SITE_ROOT_URL . '/img';
	
	static function getRootDir() {
		return $_SERVER['DOCUMENT_ROOT'];	
	}
	
	static function getSiteRootDir() {
		return self::getRootDir() . self::SITE_ID;	
	}
	
	static function getViewDir() {
		return self::getSiteRootDir() . self::VIEW_DIR;
	}
	
	static function getLayoutDir() {
		return self::getViewDir() . self::LAYOUT_DIR;
	}
	
	static function getIncDir() {
		return self::getViewDir() . self::INC_DIR;
	}
	
	static function getPopDir() {
		return self::getViewDir() . self::POP_DIR;
	}
}