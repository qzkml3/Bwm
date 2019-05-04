<?php
	require_once B_COMM_PATH . '/class/dao/CrudDao.php';

	class CrudService {
		public static function getList($tbl) {
			CrudDao::getList($tbl);
		}

		public static function getData($tbl) {
			CrudDao::getData($tbl);
		}

		public static function insert($tbl) {
			CrudDao::insert($tbl);
		}

		public static function update($tbl) {
			CrudDao::update($tbl);
		}
	}