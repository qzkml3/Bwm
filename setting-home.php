<?php
	/*site identity*/
	define('B_SITE_NAME', 'Boulder\'s homepage');
	define('B_TITLE_DELIMETER', ' : ');

	/*root*/
	define('B_ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);

	/*BWM*/
	define('B_BWM_PATH', B_ROOT_PATH  . '/-bwm');
	define('B_SITE_ROOT_PATH', B_ROOT_PATH . '/home');

	/*front layout*/
	define('B_FRONT_HEADER_FILE',  B_SITE_ROOT_PATH . '/inc/header.html');
	define('B_FRONT_FOOTER_FILE', B_SITE_ROOT_PATH . '/inc/footer.html');

	/*admin layout*/
	define('B_ADMIN_HEADER_FILE',  B_SITE_ROOT_PATH . '/inc/header.html');
	define('B_ADMIN_FOOTER_FILE', B_SITE_ROOT_PATH . '/inc/footer.html');

	/*upload*/
	define('B_UPLOAD_PATH', B_SITE_ROOT_PATH  . '/upload');

	/*log*/
	define('B_LOG_PATH', B_SITE_ROOT_PATH  . '/log');

	/*Db*/
	define('B_DB_HOST', 'B_DB_HOST');
	define('B_DB_NAME', 'B_DB_NAME');
	define('B_DB_USER', 'B_DB_USER');
	define('B_DB_PWD', 'B_DB_PWD');

	require_once B_BWM_PATH . '/class/proc/BPreProc.php';
?>