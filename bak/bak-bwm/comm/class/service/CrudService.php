<?php
	require_once B_COMM_PATH . '/class/dao/CrudDao.php';

	class CrudService {
		public static function getList($tbl) {
			$data = CrudDao::getList($tbl);
			while ($row = $data->fetch_assoc()) {
				$list[] = $row;
			}
			return $list;
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