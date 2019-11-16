<?php
	class BDate {
		static function getLastDate($year_month) {
			return date('t', strtotime($year_month));
		}
		static function getNowYear() {
			return date('Y');
		}
		static function getNowMonth() {
			return date('m');
		}
		static function getNowLastDate() {
			$year_month = self::getNowYear() . '-' . self::getNowMonth();
			return self::getLastDate($year_month);
		}
	}