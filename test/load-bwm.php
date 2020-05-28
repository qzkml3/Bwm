<?php

define('B_SITE_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/test');
define('B_BWM_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/-bwm');

spl_autoload_register('b_loadConf');
spl_autoload_register('b_loadBwm');

function b_loadConf($class) {
	$dir = B_SITE_ROOT_DIR . '/class/-bwm-conf';
	b_loadAuto($dir, $class);
}

function b_loadBwm($class) {
	$dir = B_BWM_ROOT_DIR . '/class';
	b_loadAuto($dir, $class);
}

function b_loadAuto($dir, $class) {
	$class = explode('\\', $class . '.php');
	$class = end($class);
	$path = $dir . '/' . $class;
	include_once $path;
}

$b = new bwm\BWM();
$b->site_conf = new bwm\conf\SiteConf;