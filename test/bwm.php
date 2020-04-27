<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/test/-config/SiteConf.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bwm/class/page/Page.php';


use BWM\SiteConf;
use BWM\Page;

$b_site_conf = SiteConf::getInstance();
$b_page = new Page();

$b = new BWM();

class BWM {
	private $layout;
	private $title;
	private $page;
	
	# setLayout
	function setLayout($layout) {
		$this->layout = $layout;
	}
	
	# setTitle
	function setTitle($title) {
		$this->title = $title;
	}
	
	# getPage
	function getPage() {
		return $this->page;
	}
}