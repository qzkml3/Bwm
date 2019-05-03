<?php
	define('B_ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	define('B_SITE_ROOT_PATH', B_ROOT_PATH  . '/test');
	
	define('B_FRONT_PATH', B_SITE_ROOT_PATH  . '/front');
	define('B_ADMIN_PATH', B_SITE_ROOT_PATH  . '/admin');
	
	define('B_UPLOAD_PATH', B_SITE_ROOT_PATH  . '/upload');

	require_once B_SITE_ROOT_PATH . '/comm/class/BConf.php';
	require_once B_SITE_ROOT_PATH. '/comm/class/BLayout.php';
	require_once B_SITE_ROOT_PATH . '/comm/class/BRes.php';
?>