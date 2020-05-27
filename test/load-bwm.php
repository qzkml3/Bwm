<?php

define('B_PRJ_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/test');
define('B_BWM_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/_bwm');

ini_set('display_errors', 1);
error_reporting(E_ERROR | E_COMPILE_ERROR | E_PARSE);

spl_autoload_register('b_loadPrjConf');
spl_autoload_register('b_loadBwm');
spl_autoload_register('b_loadBwmDb');
spl_autoload_register('b_loadBwmFile');

function b_loadPrjConf($class) {
	$dir = B_PRJ_ROOT_DIR . '/class/-bwm-conf/';
	b_loadAuto($dir, $class);
}

function b_loadBwm($class) {
	$dir = B_BWM_ROOT_DIR . '/class/';
	b_loadAuto($dir, $class);
}

function b_loadBwmDb($class) {
	$dir = B_BWM_ROOT_DIR . '/class/db/';
	b_loadAuto($dir, $class);
}

function b_loadBwmFile($class) {
	$dir = B_BWM_ROOT_DIR . '/class/file/';
	b_loadAuto($dir, $class);
	
}

function b_loadAuto($dir, $class) {
	$class = explode('\\', $class . '.php');
	$class = end($class);
	//echo $dir . '<br>';
	//echo $class . '<hr>';
	include_once $dir . $class;
}

use bwm\BWM;

$b = new BWM();