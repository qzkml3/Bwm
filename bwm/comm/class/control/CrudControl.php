<?php
	require_once B_COMM_PATH . '/class/service/CrudService.php';

	switch ($work_flag) {
		default:
			echo '$work_flag 가 틀립니다.';
			break;
		case 'getList':
			CrudService::getList($tbl);
			break;
		case 'getData':
			CrudService::getData($tbl);
			break;
		case 'insert':
			CrudService::insert($tbl);
			break;
		case 'update':
			CrudService::update($tbl);
			break;
	}

	class CrudControl {
		static function getList() {
			CrudService::getList();
		}
		static function getData() {
			CrudService::getData();
		}
		static function insert() {
			CrudService::insert();
		}
		static function update() {
			CrudService::update();
		}
	}