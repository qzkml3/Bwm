<?php

	class BLayout
	{
		static function getFrontHeader() {
			require_once B_FRONT_PATH . '/inc/header.html';
		}
		static function getFrontFooter() {
			require_once B_FRONT_PATH . '/inc/footer.html';
		}
		static function getAdminHeader() {
			require_once B_ADMIN_PATH. '/inc/header.html';
		}
		static function getAdminFooter() {
			require_once B_ADMIN_PATH . '/inc/footer.html';
		}
	}