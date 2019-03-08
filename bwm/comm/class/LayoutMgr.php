<?php
	
	class LayoutMgr {
		static function getHeader() {
			require_once BwmSet::getPathFront() . '/_inc/header.html';
		}
		static function getFooter() {
			require_once BwmSet::getPathFront() . '/_inc/footer.html';
		}
	}

?>