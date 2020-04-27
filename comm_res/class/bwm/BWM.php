<?php

	class BWM
	{
		static function load() {
			require_once 'BSite.php';
			require_once 'BPage.php';
			require_once 'BLayout.php';
			require_once 'BDB.php';
			require_once 'BStr.php';
			require_once 'BDate.php';
			require_once 'BFile.php';
		}

		static function getView() {
			return BStr::replace(BFile::getName(), '.php', '.html');
		}
	}