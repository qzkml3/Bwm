<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/bwm/comm/class/dao/BoardDao.php';

	class BoardService {
		public static function getList($req) {
			$row = BoardDao::getList($req);
			while ($data = $row->fetch_assoc()) {
				//$data['id'] = $data['id'] . '[id]';
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