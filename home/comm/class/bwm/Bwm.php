<?php
	class Bwm {
		static function main() {
			//cache();
			//auth()
		}

		static function load() {
			self::loadEashSiteClass();
			self::loadCommSiteClass();
		}

		/**
		 * indivisual site setting
		 */
		static function loadEashSiteClass() {
			require_once 'BSite.php';
			require_once 'BDb.php';
			require_once 'BLayout.php';
		}
		
		static function loadCommSiteClass() {
			require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/class/BDate.php';
			require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/class/BFile.php';
		}
	}