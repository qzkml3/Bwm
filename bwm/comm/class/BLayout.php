<?php

	class BLayout
	{
		static function getFrontHeader() {
			require_once B_SITE_ROOT_PATH. '/front/inc/header.html';
		}
		static function getFrontFooter() {
			require_once B_SITE_ROOT_PATH . '/front/inc/footer.html';
		}
		static function getAdminHeader() {
			require_once B_SITE_ROOT_PATH. '/admin/inc/header.html';
		}
		static function getAdminFooter() {
			require_once B_SITE_ROOT_PATH . '/admin/inc/footer.html';
		}
	}