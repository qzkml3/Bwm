<?php

class Page {
	private $layout = '';
	private $title = '';	
	private $site_conf;
	
	function __construct() {
		$this->site_conf = SiteConf::getInstance();
	}

	function setLayout($layout) {
		
	}

	function getLayout() {
		echo 'getFileName';
	}
	
	function setTitle($title) {
		$this->title = $title;
	}

	function getTitle() {
		if ($this->title) {
			$title =  $this->title . ' : ' . $this->site_conf->getSiteName();
		} else  {
			$title = SiteConf::$this->site_conf->getSiteName();
		}
		return $title;
	}
	
	function getView($replace) {
		$v = $_SERVER['PHP_SELF'];
		$v = str_replace('.php', $replace, $v);
		return $_SERVER['DOCUMENT_ROOT'] . $v;
	}
	
	function getPage($layout) {
		return $this->site_conf->getLayoutDir() . $layout;
	}
}

?>