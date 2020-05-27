<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/test/class/-bwm-conf/SiteConf.php';

use bwm\SiteConf;

$siteConf = new SiteConf();

define('B_PRJ_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/test');
define('B_BWM_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/-bwm');



spl_autoload_register('b_loadBwm');

function b_loadPrjConf($class) {
	$dir = B_PRJ_ROOT_DIR . '/class/-bwm-conf/';
	b_loadAuto($dir, $class);
}

function b_loadBwm($class) {
	$dir = B_BWM_ROOT_DIR . '/class/';
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

$b = new BWM($siteConf);