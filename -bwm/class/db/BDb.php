<?php

	class BDb
	{
		static function getDB() {
			$db = new mysqli(B_DB_HOST, B_DB_USER, B_DB_PWD, B_DB_NAME);
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
