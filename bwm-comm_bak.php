<?php
	require_once Config::getPath('comm-res') . '/class/Layout.php';
	
	class Config {
		static $var = 'var';

		//document
		static function getSiteTitle() {
			return 'site_title';
		}
		
		//db
		static function getDbHost() {
			return 'db_host';
		}
		
		static function getDbName() {
			return 'db_name';
		}
		
		static function getDbId() {
			return 'db_id';
		}
		
		static function getDbPwd() {
			return 'db_pwd';
		}
		
		//site path
		static function getPath($which) {
			$root_path = "/bwm";
			
			$font_path = $root_path . '/menu';
			$font_res_path = $font_path . '/res';
			
			$admin_path = $root_path . '/admin';
			$admin_res_path = $admin_path . '/res';
			
			$comm_res_path = $root_path . '/comm-res';
			
			$rtn_path = '';
			
			switch ($which) {
				case "root" :
					$rtn_path = $root_path;
					break;
				case "front" :
					$rtn_path = $font_path;
					break;
				case "front-res" :
					$rtn_path = $font_res_path;
					break;
				case "admin" :
					$rtn_path = $admin_path;
					break;
				case "admin-res" :
					$rtn_path = $admin_res_path;
					break;
				case "comm-res" :
					$rtn_path = $comm_res_path;
			}
			
			return $_SERVER['DOCUMENT_ROOT'] . $rtn_path;
		}
	}
?>
