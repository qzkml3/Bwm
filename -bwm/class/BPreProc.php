<?php
	require_once B_BWM_PATH . '/class/BLayout.php';
	require_once B_BWM_PATH . '/class/BHtml.php';

	BPreProc::setHttpCache();
	
	class BPreProc
	{
		static function setHttpCache() {
			header('Cache-Control: must-revalidate, max-age=30');
			header('Pragma: no-cache');
		}
	}