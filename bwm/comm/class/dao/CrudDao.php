<?php
	class CrudDao {
		static function getList($tbl) {
			$query = 'select * from ' . $tbl;
			return BDb::execute($query);
		}

		public static function getData($tbl) {
			$query = 'select * from ' . $tbl;
			return BDb::execute($query);
		}

		public static function insert($tbl) {
			$query = '';
			BDb::execute($query);
		}

		public static function update($tbl) {
			$query = '';
			BDb::execute($query);
		}
	}