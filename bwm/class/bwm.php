<?php
use BWM\SiteConf; 

$b = new BWM();

class BWM {
	public $site_conf;
	private $layout;
	private $title;
	private $page;

	function __construct() {
		$this->site_conf = SiteConf::getInstance();
	}

	# Layout
	function layout($layout) {
		if ($layout == null) {
		}
		$this->layout = $layout;
	}

	# Title
	function title($title) {
		if ($title == null) {
			if ($this->title) {
				$title = $this->title . ' : ' . $this->site_conf->getSiteName();
			} else {
				$title = SiteConf::$this->site_conf->getSiteName();
			}
			return $title;
		} else {
			$this->title = $title;
		}
	}

	# Page that with layout
	function page($layout) {
		($layout == null) ?$layout = 'layout.php' : $layout;
		return $this->site_conf->getLayoutDir() . '/' . $layout;
	}

	function postProc() {

	}

	# Page that without layout
	function view($replace) {
		($replace == null) ?$replace = '.html' : $replace;
		$v = $_SERVER['PHP_SELF'];
		$v = str_replace('.php', $replace, $v);
		return $_SERVER['DOCUMENT_ROOT'] . $v;
	}
}

