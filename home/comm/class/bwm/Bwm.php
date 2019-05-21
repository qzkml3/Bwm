<?php
	class Bwm {
		static function main() {
			//cache();
			//auth()
		}

		static function load() {
			self::loadPrivate();
			self::loadShare();
		}
		
		static function loadPrivate() {
			require_once 'BSite.php';
			require_once 'BDb.php';
			require_once 'BLayout.php';
		}
		
		static function loadShare() {
			require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/class/BDate.php';
			require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/class/BFile.php';
		}
	}