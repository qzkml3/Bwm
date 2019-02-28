<?php
	//require_once BWMSet::$path_res . "/inc/A.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . "/bwm/res/inc/A.php";
	
	class BWMSet {
		$doc_root = $_SERVER['DOCUMENT_ROOT'];
		//db
		static $db_host = "db_host";
		static $db_name = "db_name";
		static $db_id = "db_id";
		static $db_pwd = "db_pwd";
		
		//web path
		static $path_front = $doc_root . "/bwm/menu";
		static $path_admin = "/bwm/admin";
		static $path_res = "/bwm/res";
	}
?>
