<?php

namespace bwm;

use bwm\conf\SiteConf;

class BWM {
	public $site_conf;

	private $layout;
	private $layout_file;
	private $title;
	private $page;
	private $view;

	function __construct($site_conf) {
		$this->site_conf = $site_conf;
		
		$this->loadBwm();
		$this->setErrConf();
	}
	
	private function setErrConf() {
		ini_set('display_errors', 1);
		error_reporting(E_ERROR | E_COMPILE_ERROR | E_PARSE);	
	}

	private function loadBwm() {

	}

	# Layout
	function setLayout($layout) {
		$this->layout = $layout;
	}

	# Title
	function setTitle($title) {
		$this->title = $title;
	}

	function getTitle() {
		if ($this->title) {
			$title = $this->title . ' : ' . $this->getSiteName();
		} else {
			$title = $this->getSiteName();
		}
		return $title;
	}

	# Page that with layout
	function getPage() {
		if ($this->layout_file) {
			$layout = $this->layout_file;
		} else {
			$layout = 'layout.php';
		}
		return SiteConf::getLayoutDir() . '/' . $layout;
	}
	
	function getSiteId() {
		return SiteConf::SITE_ID;
	}
	
	function getSiteName() {
		return SiteConf::SITE_NAME;
	}
	
	function postProc() {

	}

	# Page that without layout
	function getView() {
		if ($this->view) {
			$replace = $this->view;
		} else {
			$replace = '.html';
		}

		$v = $_SERVER['PHP_SELF'];
		$v = str_replace('.php', $replace, $v);
		//$v = iconv('UTF-8', 'EUC-KR', $v);
		//$v = iconv('EUC-KR', 'UTF-8', $v);
		$v = urldecode($v);
		//echo $v; exit;
		return $_SERVER['DOCUMENT_ROOT'] . $v;
	}

	function getRootUrl() {
		return '/';
	}
}