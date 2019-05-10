<?php

	class BDb
	{
		static function getDB() {
			$db_host = 'localhost';
			$db_user = 'root';
			$db_pwd = 'password';
			$db_name = 'bwm';
			
			$db = new mysqli($db_host, $db_user, $db_pwd, $db_name);
			$db->set_charset("UTF8");

			return $db;
		}

		static function execute($query) {
			$db = self::getDB();
			$rtn = $db->query($query);
			$db->close();

			return $rtn;
		}
	}
