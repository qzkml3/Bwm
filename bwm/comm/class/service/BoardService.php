<?php
	require_once B_COMM_PATH . '/class/dao/BoardDao.php';

	class BoardService {
		public static function getList($req) {
			$row = BoardDao::getList($req);
			while ($data = $row->fetch_assoc()) {
				$list[] = $data;
			}
			return $list;
		}

		public static function getData($req) {
			BoardDao::getData($req);
		}

		public static function insert($req) {
			BoardDao::insert($req);
		}

		public static function update($req) {
			BoardDao::update($req);
		}
	}