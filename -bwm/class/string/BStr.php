<?php
	class BStr {
		static function hasStr($subject, $find) {
			return strpos($subject, $find) > -1;
		}
		static function removeStr($subject, $remove) {
			return str_replace($remove, '', $subject);
		}
	}