<?php
	define('B_ROOT', $_SERVER['DOCUMENT_ROOT']);
	define('B_SITE_ROOT', B_ROOT  . '/bwm2');

	define('B_COMM', B_ROOT  . '/comm');
	define('B_FRONT', B_ROOT  . '/front');
	define('B_ADMIN', B_ROOT  . '/admin');

	require_once  B_SITE_ROOT . '/comm/class/BConf.php';
	require_once  B_SITE_ROOT . '/comm/class/BLayout.php';
?>