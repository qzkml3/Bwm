<?php

	class BLayout
	{
		static function getFrontHeader() {
			require_once B_FRONT_HEADER_FILE;
		}
		static function getFrontFooter() {
			require_once B_FRONT_FOOTER_FILE;
		}
		static function getAdminHeader() {
			require_once B_ADMIN_HEADER_FILE;
		}
		static function getAdminFooter() {
			require_once B_ADMIN_FOOTER_FILE;
		}
	}