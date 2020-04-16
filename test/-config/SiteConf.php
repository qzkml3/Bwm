<?php

class SiteConf {
	private static $instance;

	# Site
	private $site_name = 'Test';
	private $site_id = '/test';

	# Site dir
	private $view_dir = '/view';
	private $layout_dir = '/-layout';
	private $inc_dir = '/-inc';
	private $pop_dir = '/-pop';

	# Site URL
	private $root_url = '/';
	private $view_url = '/view';
	private $layout_url = '/-layout';
	private $inc_url = '/-inc';
	private $pop_url = '/-pop';

	# Site resource URL
	private $css_url = '/css';
	private $js_url = '/js';
	private $img_url = '/img';

	public static function getInstance() {
		if (null === self::$instance) {
			self::$instance = new SiteConf();
		}

		return self::$instance;
	}

	private function __construct() {
		echo 'SiteConf __construct';
	}

	private function __destruct() {
		echo 'SiteConf __destruct';
	}
	
	function getSiteName() {
		return $this->site_name;
	}
	
	function getSiteId() {
		return $this->site_id;
	}

	# Server root
	function getRootDir() {
		return $_SERVER['DOCUMENT_ROOT'];
	}

	# Site root
	function getSiteRootDir() {
		return $this->getRootDir() . $this->site_id;
	}

	function getViewDir() {
		return $this->getSiteRootDir() . $this->view_dir;
	}

	function getLayoutDir() {
		return $this->getViewDir() . $this->layout_dir;
	}

	function getIncDir() {
		return $this->getViewDir() . $this->inc_dir;
	}

	function getPopDir() {
		return $this->getViewDir() . $this->pop_dir;
	}
	
	function getSiteRootUrl() {
		return $this->site_id;
	}

	function getCssUrl() {
		return $this->getSiteRootUrl() . $this->css_url;
	}

	function getJsUrl() {
		return $this->getSiteRootUrl() . $this->js_url;
	}

	function getImgUrl() {
		return $this->getSiteRootUrl() . $this->img_url;
	}
}