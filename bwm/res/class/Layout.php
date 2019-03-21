<?php
	
	class Layout {
		static function getHeader($which) {
			require_once Config::getPath($which) . '/res/inc/header.html';
		}
		
		static function getFooter($which) {
			require_once Config::getPath($which) . '/res/inc/footer.html';
		}
	}

?>