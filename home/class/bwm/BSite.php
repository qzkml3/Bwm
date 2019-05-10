<?php
	define('B_SITE_NAME', 'Boulder\'s homepage');
	define('B_TITLE_DELIMITER', ' : ');
	
	class BSite {
		static function getPageTitle() {
			if (B_TITLE) {
				return B_TITLE . B_TITLE_DELIMITER .'Boulder\'s homepage';
			} else {
				return 'Boulder\'s homepage';
			}
		}
	}