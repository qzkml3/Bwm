<?php
require_once 'TB.php';

class DB {
	static function table($tbName) {
		return $tb = new TB($tbName);
	}
}