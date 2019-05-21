<?php

	class BLayout
	{
		static function getHeader() {
			switch (B_LAYOUT) {
				default:
					require_once $_SERVER['DOCUMENT_ROOT'] . '/home/comm/inc/header.html';
					break;
				case 'admin':
					break;
			}
		}

		static function getFooter() {
			switch (B_LAYOUT) {
				default:
					require_once $_SERVER['DOCUMENT_ROOT'] . '/home/comm/inc/footer.html';
					break;
				case 'admin':
					break;
			}
		}
	}