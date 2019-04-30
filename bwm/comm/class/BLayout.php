<?php

	class BLayout
	{
		static function getFrontHeader() {
			require_once B_FRONT. '/inc/header.html';
		}
		static function getFrontFooter() {
			require_once B_FRONT . '/inc/footer.html';
		}
	}