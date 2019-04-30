<?php

	class BLayout
	{
		static function getFrontHeader() {
			require_once B_SITE_ROOT . '/front/inc/header.html';
		}
		static function getFrontFooter() {
			require_once B_SITE_ROOT . '/front/inc/footer.html';
		}
	}

?>