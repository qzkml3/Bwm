<?php
	define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
	
	define('SITE_NAME', 'test-2');
	
	define('PRJ_URL', '/test-2');
	define('PRJ_DIR', ROOT_DIR . PRJ_URL);
	
	$v = $_SERVER['PHP_SELF'];
	$v = str_replace('.php', '.html', $v);
	//require_once ROOT_DIR . $v;
	$_view = ROOT_DIR . $v;
	
	require_once PRJ_DIR . '/inc/layout/layout.php';