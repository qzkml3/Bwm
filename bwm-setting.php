<?php
	require_once BwmSet::getPathComm() . '/class/IncludeMgr.php';
	IncludeMgr::getCommInclude();
	CodeMgr::exePreCode();
	
	class BwmSet {
		//site
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
		
		//doc path
		static function getPathFront() {
			return $_SERVER['DOCUMENT_ROOT'] . '/bwm/menu';
		}
		
		static function getPathAdmin() {
			return $_SERVER['DOCUMENT_ROOT'] . '/bwm/admin';
		}
		
		static function getPathComm() {
			return $_SERVER['DOCUMENT_ROOT'] . '/bwm/comm';
		}
	}
?>
