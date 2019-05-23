<?php
	class Bwm {

		static function load() {
			self::loadPrivateSiteClass();
			self::loadCommSiteClass();
		}

		/**
		 * private site setting
		 */
		static function loadPrivateSiteClass() {
			require_once 'BSite.php';
			require_once 'BDb.php';
			require_once 'BLayout.php';
		}
		
		static function loadCommSiteClass() {
			require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/class/BDate.php';
			require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/class/BFile.php';
			require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/class/BPage.php';
		}
	}