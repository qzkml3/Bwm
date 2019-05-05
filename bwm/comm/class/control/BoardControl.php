<?php
	require_once B_COMM_PATH . '/class/service/BoardService.php';

	switch ($work_flag) {
		default:
			echo '$work_flag 가 틀립니다.';
			break;
		case 'getList':
			$list = BoardService::getList($req);
			break;
		case 'getData':
			CrudService::getData($req);
			break;
		case 'insert':
			CrudService::insert($req);
			break;
		case 'update':
			CrudService::update($req);
			break;
	}