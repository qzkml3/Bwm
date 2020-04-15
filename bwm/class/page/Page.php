<?php

class Page {
	static private $layout = '';
	static private $title = '';
	
	static function setLayout($layout) {
		
	}

	static function getLayout() {
		echo 'getFileName';
	}
	
	static function setTitle($title) {
		self::$title = $title;
	}

	static function getTitle() {
		if (self::$title) {
			$title =  self::$title . ' : '. SiteConf::SITE_NAME;
		} else  {
			$title = SiteConf::SITE_NAME;
		}
		return $title;
	}
	
	static function show($replace) {
		$v = $_SERVER['PHP_SELF'];
		$v = str_replace('.php', $replace, $v);
		$_view = $_SERVER['DOCUMENT_ROOT'] . $v;
		
		require_once SiteConf::getLayoutDir() . '/layout.php';
	}
}

?>