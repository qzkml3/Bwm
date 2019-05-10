<?php

	class BoardDao {
		static function getList($req) {
			$query = 'select * from' . BTable::$board . 'order by id desc';
			return BDb::execute($query);
		}

		public static function getData($req) {
			$query = '';
			return BDb::execute($query);
		}

		public static function insert($req) {
			$query = '';
			BDb::execute($query);
		}

		public static function update($req) {
			$query = '';
			BDb::execute($query);
		}
	}