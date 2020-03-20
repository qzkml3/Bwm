<?php
	class bTest {
		static function isLocal() {
			if ($_SERVER['SERVER_ADDR'] == '127.0.0.1'
				|| $_SERVER['SERVER_PORT'] == '700'
			) {
				return true;
			} else {
				return false;
			}
		}
	}