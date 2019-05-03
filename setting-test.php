<?php
	/*site identity*/
	define('B_SITE_NAME', 'test');
	define('B_SITE_DELIMETER', ' : ');
	
	/*root*/
	define('B_ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	
	/*BWM*/
	define('B_BWM_PATH', B_ROOT_PATH  . '/-bwm');
	
	/*site*/
	define('B_SITE_ROOT_PATH', B_ROOT_PATH  . '/test');
	
	/*front*/
	define('B_FRONT_PATH', B_SITE_ROOT_PATH  . '/front');
	define('B_FRONT_INC_PATH', B_SITE_ROOT_PATH . '/inc');
	
	/*admin*/
	define('B_ADMIN_PATH', B_SITE_ROOT_PATH  . '/admin');
	define('B_ADMIN_INC_PATH', B_ADMIN_PATH  . '/inc');
	
	/*comm*/
	define('B_COMM_PATH', B_SITE_ROOT_PATH  . '/comm');
	define('B_COMM_INC_PATH', B_COMM_PATH  . '/inc');
	
	/*Db*/
	define('B_DB_HOST', 'B_DB_HOST');
	define('B_DB_NAME', 'B_DB_NAME');
	define('B_DB_USER', 'B_DB_USER');
	define('B_DB_PWD', 'B_DB_PWD');
	
	/*upload*/
	define('B_UPLOAD_PATH', B_SITE_ROOT_PATH  . '/upload');
	
	require_once B_BWM_PATH . '/class/layout/BLayout.php';
?>