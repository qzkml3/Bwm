<?php

	class BLayout
	{
		static function getFrontHeader() {
			require_once B_FRONT_INC_PATH . '/header.html';
		}
		static function getFrontFooter() {
			require_once B_FRONT_INC_PATH . '/footer.html';
		}
		static function getAdminHeader() {
			require_once B_ADMIN_INC_PATH. '/header.html';
		}
		static function getAdminFooter() {
			require_once B_ADMIN_INC_PATH . '/footer.html';
		}
	}