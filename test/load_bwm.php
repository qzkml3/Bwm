<?php
define('B_BWM_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/_bwm');
define('B_PRJ_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/test');

ini_set('display_errors', 1);
error_reporting(E_ERROR | E_COMPILE_ERROR | E_PARSE);
//require_once $_SERVER['DOCUMENT_ROOT'] . '/test/class/-bwm-conf/SiteConf.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/bwm/class/BWM.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/bwm/class/file/File.php';

spl_autoload_register('b_loadPrjConf');
spl_autoload_register('b_loadBwm');
spl_autoload_register('b_loadBwmDb');
spl_autoload_register('b_loadBwmFile');




function b_loadPrjConf($class) {
	$v = B_PRJ_ROOT_DIR . '/class/' . $class . '.php';
	$v = str_replace(DIRECTORY_SEPARATOR, '/', $v);
	include_once $v;
	echo '<br>' . $v;
}

function b_loadBwm($class) {
	$v = B_BWM_ROOT_DIR . '/class/' . $class . '.php';
	$v = str_replace(DIRECTORY_SEPARATOR, '/', $v);
	include_once $v;
	echo '<br>' . $v;
}

function b_loadBwmDb($class) {
	$v = B_BWM_ROOT_DIR . '/class/db/' . $class . '.php';
	$v = str_replace(DIRECTORY_SEPARATOR, '/', $v);
	include_once $v;
	echo '<br>' . $v;
}

function b_loadBwmFile($class) {
	$v = B_BWM_ROOT_DIR . '/class/file/' . $class . '.php';
	$v = str_replace(DIRECTORY_SEPARATOR, '/', $v);
	include_once $v;
	echo '<br>' . $v;
}

function b_loadAuto($class) {
	
}

$b = new BWM();