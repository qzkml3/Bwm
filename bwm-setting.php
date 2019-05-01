<?php
	define('B_ROOT_PATH', $_SERVER['DOCUMENT_ROOT']); //root_path
	define('B_SITE_ROOT_PATH', B_ROOT_PATH  . '/bwm'); //site_root_path
	define('B_UPLOAD_PATH', B_SITE_ROOT_PATH  . '/upload'); //upload_path

	require_once B_SITE_ROOT_PATH . '/comm/class/BConf.php';
	require_once B_SITE_ROOT_PATH. '/comm/class/BLayout.php';
	require_once B_SITE_ROOT_PATH . '/comm/class/BRes.php';
?>