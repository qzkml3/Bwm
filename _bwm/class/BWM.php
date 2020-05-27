<?php
namespace bwm;

use bwm\SiteConf;

class BWM {
	public $site_conf;
	
	private $layout;
	private $layout_file;
	private $title;
	private $page;
	private $view;

	function __construct() {
		$this->site_conf = SiteConf::getInstance();
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
			$title = $this->title . ' : ' . $this->site_conf->getSiteName();
		} else {
			$title = $this->site_conf->getSiteName();
		}
		return $title;
	}

	# Page that with layout
	function getPage() {($this->layout_file) 
			? $layout = $this->layout_file 
			:  $layout = 'layout.php';
		return $this->site_conf->getLayoutDir() . '/' . $layout;
	}

	function postProc() {

	}

	# Page that without layout
	function getView() {
		($this->view)  
			? $replace = $this->view 
			: $replace = '.html';
		
		$v = $_SERVER['PHP_SELF'];
		$v = str_replace('.php', $replace, $v);
		//$v = iconv('UTF-8', 'EUC-KR', $v);
		//$v = iconv('EUC-KR', 'UTF-8', $v);
		$v = urldecode($v);
		//echo $v; exit;
		return $_SERVER['DOCUMENT_ROOT'] . $v;
	}
}