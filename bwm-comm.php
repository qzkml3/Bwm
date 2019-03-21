<?php
	require_once Config::getPath('res') . '/class/Layout.php';
	
	class Config {
		//document
		static function getSiteTitle() {
			return "site_title";
		}
		
		//db
		static function getDbHost() {
			return "db_host";
		}
		
		static function getDbName() {
			return "db_name";
		}
		
		static function getDbId() {
			return "db_id";
		}
		
		static function getDbPwd() {
			return "db_pwd";
		}
		
		//site path
		static function getPath($which) {
			switch ($which) {
				default :
					return "can't find path.";
				case "front" :
					return $_SERVER['DOCUMENT_ROOT'] . '/bwm/menu';
				case "admin" :
					return $_SERVER['DOCUMENT_ROOT'] . '/bwm/admin';
				case "res" :
					return $_SERVER['DOCUMENT_ROOT'] . '/bwm/res';
			}
		}
	}
?>
