<?php
	/*site identity*/
	define('B_SITE_NAME', 'BWM');
	define('B_TITLE_DELIMETER', ' : ');

	/*root*/
	define('B_ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);

	/*BWM*/
	define('B_BWM_PATH', B_ROOT_PATH  . '/-bwm');

	/*site root*/
	define('B_SITE_ROOT_PATH', B_ROOT_PATH . '/bwm');
	define('B_SITE_ROOT_URL', '/bwm');
	define('B_ADMIN_PATH', B_SITE_ROOT_PATH . '/admin');
	define('B_COMM_PATH', B_SITE_ROOT_PATH . '/comm');
	define('B_FRONT_PATH', B_SITE_ROOT_PATH . '/front');

	/*front layout*/
	define('B_FRONT_HEADER_FILE',  B_FRONT_PATH . '/inc/header.html');
	define('B_FRONT_FOOTER_FILE', B_FRONT_PATH . '/inc/footer.html');

	/*admin layout*/
	define('B_ADMIN_HEADER_FILE',  B_ADMIN_PATH . '/inc/header.html');
	define('B_ADMIN_FOOTER_FILE', B_ADMIN_PATH . '/inc/footer.html');

	/*upload*/
	define('B_UPLOAD_PATH', B_SITE_ROOT_PATH  . '/upload');

	/*log*/
	define('B_LOG_PATH', B_SITE_ROOT_PATH  . '/log');

	/*Db*/
	define('B_DB_HOST', 'localhost');
	define('B_DB_USER', 'root');
	define('B_DB_PWD', 'pwd');
	define('B_DB_NAME', 'bwm');

	require_once B_BWM_PATH . '/class/proc/BPreProc.php';
?>