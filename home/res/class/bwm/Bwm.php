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
			require_once $_SERVER['DOCUMENT_ROOT'] . '/comm_res/class/string/StrUtil.php';
			require_once $_SERVER['DOCUMENT_ROOT'] . '/comm_res/class/BDate.php';
			require_once $_SERVER['DOCUMENT_ROOT'] . '/comm_res/class/BFile.php';
			require_once $_SERVER['DOCUMENT_ROOT'] . '/comm_res/class/BPage.php';
		}
	}