<?php
	class BStr {
		static function removeStr($subject, $remove) {
			return str_replace($remove, '', $subject);
		}
	}