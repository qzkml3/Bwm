<?php
	echo $_SERVER['REQUEST_URI'];
	class CrudControl {
		static function getList() {
			CrudService::getList();
		}
	}