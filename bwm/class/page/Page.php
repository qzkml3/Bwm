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
			$title =  $this->title . ' : '. SiteConf::SITE_NAME;
		} else  {
			$title = SiteConf::SITE_NAME;
		}
		return $title;
	}
	
	function getView($replace) {
		$v = $_SERVER['PHP_SELF'];
		$v = str_replace('.php', $replace, $v);
		return $_SERVER['DOCUMENT_ROOT'] . $v;
	}
	
	function showPage() {
		require_once $this->site_conf->getLayoutDir() . '/layout.php';
	}
}

?>