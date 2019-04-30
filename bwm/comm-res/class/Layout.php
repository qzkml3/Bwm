<?php
	
	class Layout {
		static function getHeader($which) {
			$v = $_SERVER['DOCUMENT_ROOT'] . Config::$var;


			require_once Config::getPath($which) . '/res/inc/header.html';
		}
		
		static function getFooter($which) {
			require_once Config::getPath($which) . '/res/inc/footer.html';
		}
	}

?>