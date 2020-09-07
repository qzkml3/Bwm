<?php

namespace bwm;

use bwm\conf\SiteConf;
use bwm\file\File;

class BWM {
	public $site_conf;
	public $file;

	private $layout;
	private $layout_file;
	private $title;
	private $page;
	private $view;
	
	private $tag;

	function __construct() {
		$this->loadBwm();
		$this->setErrConf();
	}
	
	private function setErrConf() {
		ini_set('display_errors', 1);
		error_reporting(E_ERROR | E_COMPILE_ERROR | E_PARSE);	
	}

	private function loadBwm() {

	}

	# layout
	function setLayout($layout) {
		$this->layout = $layout;
	}
	function getLayout() {
		$v = $this->layout;
		return $v;
	}

	# title
	function setTitle($title) {
		$this->title = $title;
	}
	function setTitleByFileName() {
		$this->title = $this->file->getFileName();
	}
	
	function getTitle() {
		if ($this->title) {
			$title = $this->title . ' : ' . $this->getSiteName();
		} else {
			$title = $this->getSiteName();
		}
		return $title;
	}

	function getPageTitle() {
		return $this->title;
	}

	# Page that with layout
	function getPage() {
		if ($this->layout_file) {
			$layout = $this->layout_file;
		} else {
			$layout = 'layout.html';
		}
		return $this->site_conf->getLayoutDir() . '/' . $layout;
	}
	
	# Get site name
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
	
	function setTag($tags) {
		$v = str_replace(' ', '', $tags);
		$v = explode(',', $v);
		
		$rtn = '';
		foreach($v as $v2) {
			$rtn .= '<a class="b_btn_green">#'. $v2 . '</a> ';
		}
		
		$this->tag = $rtn;
	}

	function getTag($tags) {
		return $this->tag;
	}
}