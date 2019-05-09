<?php
	require_once B_BWM_PATH . '/class/layout/BLayout.php';
	require_once B_BWM_PATH . '/class/html/BHtml.php';
	require_once B_BWM_PATH . '/class/string/BStr.php';
	require_once B_BWM_PATH . '/class/db/BDb.php';
	require_once B_BWM_PATH . '/class/test/BFile.php';
	require_once B_BWM_PATH . '/class/date/BDate.php';

	BPreProc::setHttpCache();
	$req = '';
	
	class BPreProc
	{
		static function setHttpCache() {
			header('Cache-Control: must-revalidate, max-age=30');
			header('Pragma: no-cache');
		}
	}